
<template>

    <li :class="{'timeline-inverted': operation && operation.type === 'outcome'}">

        <div v-if="withBadge" :class="badgeClass">
            {{ date.date() }}
        </div>

        <div v-if="operation" :class="panelClasses">

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

    </li>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        props: ['operation', 'date', 'withBadge'],

        computed: {

            badgeClass: function () {
                return {
                    'timeline-badge': true,
                    'primary': this.operation,
                }
            },

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

            panelClasses: function () {
                return {
                    'timeline-panel': true,
                    'with-arrow': this.withBadge,
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

</style>
