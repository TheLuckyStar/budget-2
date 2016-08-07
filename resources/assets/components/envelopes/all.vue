
<template>

    <div>

        <h1>
            {{ text.envelopes.enabled.title }}
        </h1>

        <hr>

        <div class="col-md-6">
            <layout-card :color="enabledEnvelopesBalance < 0 ? 'danger' : 'success'"
                :icon="enabledEnvelopesBalance < 0 ? 'fa-thumbs-down' : 'fa-thumbs-up'"
                :title="text.envelopes.balance.title"
                :text="enabledEnvelopesBalance"
                :comment="$options.filters.formatLongDate(date)"
            ></layout-card>
        </div>

        <div class="col-md-6">
            <layout-card :color="enabledEnvelopesRelativeSavings < 0 ? 'danger' : 'success'"
                :icon="'fa-battery-' + batteryValue(enabledEnvelopesRelativeSavings)"
                :title="text.envelopes.savings.title"
                :text="enabledEnvelopesSavings + '/' + (enabledEnvelopesRevenues + enabledEnvelopesIncomes)"
                :comment="enabledEnvelopesRelativeSavings + '%'"
            ></layout-card>
        </div>

        <div class="col-md-12">
            <layout-chart type="radar" :title="text.envelopes.balances.title" :chart-labels="balancesLabels" :data="balancesData" :data-labels="text.envelopes.balances.labels"></layout-chart>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        computed: {

            balancesData: function () {
                return [
                    {
                        color: 'primary',
                        data: this.enabledEnvelopes.map(function (envelope) {
                            return envelope.balance
                        }),
                    },
                ]
            },

            balancesLabels: function () {
                return this.enabledEnvelopes.map(function (envelope) {
                    return envelope.name
                })
            },

        },

        methods: {
            batteryValue: function (percentage) {
                return Math.max(0, Math.min(4, Math.floor((percentage + 13) / 25)))
            },
        },

    }

</script>
