
<template>

    <li :class="liClass">

        <div class="timeline-badge primary">
            {{  operation.date.date() }}
        </div>

        <div :class="panelClasses">

            <div class="timeline-heading">

                <h4 class="timeline-title">

                    <template v-if="operationEnvelope">
                        <i class="fa fa-fw {{ operationEnvelope.icon }}"></i>
                        {{ operationEnvelope.name }}
                    </template>
                    <template v-else="operationEnvelope">
                        {{ text.operations.types[operation.type] }}
                    </template>

                    <b>
                        {{ operation.amount }}
                        {{ operationCurrency.name }}
                    </b>

                </h4>

                <p v-if="operationAccount">
                    <small class="text-muted">
                        {{ operationAccount.name }}
                    </small>
                </p>

            </div>

            <div class="timeline-body">
                <p>
                    {{ operation.name }}
                </p>
            </div>

        </div>

        <div class="timeline-alternate">
            {{ alternateText }}
        </div>

    </li>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        props: ['operation'],

        computed: {

            operationAccount: function () {
                return this.accounts.filter(function (account) {
                    return account.id == this.operation.account_id
                }, this)[0]
            },

            operationEnvelope: function () {
                return this.envelopes.filter(function (envelope) {
                    return envelope.id == this.operation.envelope_id
                }, this)[0]
            },

            operationCurrency: function () {
                return this.currencies.filter(function (currency) {
                    if (this.operationAccount) {
                        return currency.id == this.operationAccount.currency_id
                    }
                    return currency.id == this.operation.currency_id
                }, this)[0]
            },

            alternateText: function () {
                return moment.localeData().months(this.operation.date) + ' ' + this.operation.date.format('YYYY')
            },

            liClass: function () {
                return {
                    'timeline-inverted': this.operation.type === 'outcome',
                }
            },

            iconClasses: function () {
                return {
                    fa: true,
                    'fa-fw': true,
                    'fa-plus': this.operation.type === 'income',
                    'fa-minus': this.operation.type === 'outcome',
                    'fa-plus-circle': this.operation.type === 'revenue',
                    'fa-exchange': this.operation.type === 'transfer',
                }
            },

            panelClasses: function () {
                return {
                    'timeline-panel': true,
                    'info': this.operation.type === 'income',
                    'danger': this.operation.type === 'outcome',
                    'success': this.operation.type === 'revenue',
                    'warning': this.operation.type === 'transfer',
                }
            },

        },

    }

</script>



<style scoped>

    .timeline-inverted {
        text-align: right;
    }

    .timeline-title b {
        float: right;
    }

    .timeline-inverted .timeline-title b {
        float: left;
    }

    .timeline-alternate {
        width: 46%;
        float: right;
        padding: 20px;
        color: #c3c3c3;
        text-align: center;
        font-weight: bold;
        font-size: x-large;
        text-transform: uppercase;
    }

    .timeline-inverted .timeline-alternate {
        float: left;
    }

</style>
