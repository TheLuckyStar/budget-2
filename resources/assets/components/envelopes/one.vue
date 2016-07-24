
<template>

    <div>

        <h1>
            <i class="fa {{ envelope.icon }}"></i>
            {{ envelope.name }}
        </h1>

        <hr>

        <div class="col-md-6">
            <layout-card :color="envelope.balance < 0 ? 'danger' : 'success'"
                :icon="envelope.balance < 0 ? 'fa-thumbs-down' : 'fa-thumbs-up'"
                :title="text.envelopes.situation.title"
                :text="envelope.balance"
                :comment="$options.filters.formatLongDate(date)"
            ></layout-card>
        </div>

        <div class="col-md-6">
            <envelopes-form :envelope="envelope"></envelopes-form>
        </div>

        <div class="col-md-12">
            <envelopes-development :envelope="envelope"></envelopes-development>
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

        components: {
            EnvelopesDevelopment,
            EnvelopesForm,
        },

    }

</script>
