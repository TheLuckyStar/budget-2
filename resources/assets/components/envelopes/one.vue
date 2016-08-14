
<template>

    <div class="row">

        <div class="col-md-12">

            <div class="pull-right">
                <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#envelope-form">
                    {{ text.envelopes.form.title }}
                </button>
                <div class="modal fade" id="envelope-form" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title">
                                    {{ text.envelopes.form.title }}
                                </h4>
                            </div>
                            <div class="modal-body">
                                <envelopes-form :envelope="envelope"></envelopes-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1>
                <i class="fa {{ envelope.icon }}"></i>
                {{ envelope.name }}
            </h1>

            <hr>

        </div>

        <div class="col-md-6" v-if="envelope.state">
            <layout-card :color="envelope.state.balance < 0 ? 'danger' : 'success'"
                :icon="envelope.state.balance < 0 ? 'fa-thumbs-down' : 'fa-thumbs-up'"
                :title="text.envelopes.balance.title"
                :text="envelope.state.balance"
                :comment="$options.filters.formatLongDate(date)"
            ></layout-card>
        </div>

        <div class="col-md-6" v-if="envelope.state">
            <layout-card :color="envelope.state.relative_savings < 0 ? 'danger' : 'success'"
                :icon="'fa-battery-' + batteryValue(envelope.state.relative_savings)"
                :title="text.envelopes.savings.title"
                :text="envelope.state.savings + '/' + (envelope.state.revenues + envelope.state.incomes)"
                :comment="envelope.state.relative_savings + '%'"
            ></layout-card>
        </div>

        <div class="col-md-12">
            <envelopes-development></envelopes-development>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var EnvelopesDevelopment = require('components/envelopes/development.vue')
    var EnvelopesForm = require('components/envelopes/form.vue')

    export default {

        mixins: [mixins.vuex],

        data: function () {
            return {
                date: moment(),
            }
        },

        route: {
            data: function () {
                this.setCurrentEnvelope(this.$route.params.envelope_id)
            },
        },

        watch: {
            language: function() {
                this.date = moment.unix(this.date.unix())
            },
        },

        methods: {
            batteryValue: function (percentage) {
                return Math.max(0, Math.min(4, Math.floor((percentage + 13) / 25)))
            },
        },

        components: {
            EnvelopesDevelopment,
            EnvelopesForm,
        },

    }

</script>
