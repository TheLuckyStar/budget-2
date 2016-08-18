
<template>

    <div class="row">

        <div class="col-md-12">

            <h1>
                {{ text.envelopes.enabled.title }}
            </h1>

            <hr>

        </div>

        <div class="col-md-6">
            <layout-card :color="enabledEnvelopesBalance < 0 ? 'danger' : 'success'"
                :icon="enabledEnvelopesBalance < 0 ? 'fa-thumbs-down' : 'fa-thumbs-up'"
                :title="text.envelopes.balance.title"
                :text="enabledEnvelopesBalance"
                :comment="$options.filters.formatLongDate(date)"
            ></layout-card>
        </div>

        <div class="col-md-6" v-if="envelopeDevelopment.state">
            <layout-card :color="envelopeDevelopment.state.relative_savings < 0 ? 'danger' : 'success'"
                :icon="'fa-battery-' + batteryValue(envelopeDevelopment.state.relative_savings)"
                :title="text.envelopes.savings.title"
                :text="envelopeDevelopment.state.savings + '/' + (envelopeDevelopment.state.revenues + envelopeDevelopment.state.incomes)"
                :comment="envelopeDevelopment.state.relative_savings + '%'"
            ></layout-card>
        </div>

        <div class="col-md-12">
            <layout-chart type="radar"
                :legend="text.envelopes.balances.title"
                :labels="balancesLabels"
                :datasets="balancesData"></layout-chart>
        </div>

        <div class="col-md-12">
            <envelopes-development></envelopes-development>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var EnvelopesDevelopment = require('components/envelopes/development.vue')

    export default {

        mixins: [mixins.vuex],

        computed: {

            balancesData: function () {
                return [
                    {
                        type: 'radar',
                        data: this.enabledEnvelopes.map(function (envelope) {
                            return envelope.balance
                        }),
                        label: this.text.envelopes.development.balanceLabel,
                        color: 'default',
                    },
                    {
                        type: 'radar',
                        data: this.enabledEnvelopes.map(function (envelope) {
                            return envelope.state.savings
                        }),
                        label: this.text.envelopes.development.savingsLabel,
                        color: 'primary',
                    },
                ]
            },

            balancesLabels: function () {
                return this.enabledEnvelopes.map(function (envelope) {
                    return envelope.name
                })
            },

        },

        route: {
            data: function () {
                this.$emit('refresh-data')
            },
        },

        methods: {
            batteryValue: function (percentage) {
                return Math.max(0, Math.min(4, Math.floor((percentage + 13) / 25)))
            },
        },

        events: {
            'refresh-data': function () {
                this.setCurrentEnvelope(null)
                return true
            },
        },

        components: {
            EnvelopesDevelopment,
        },

    }

</script>
