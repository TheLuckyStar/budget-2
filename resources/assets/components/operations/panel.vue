
<template>

    <li :class="{'timeline-inverted': operation && operation.type === 'outcome'}">

        <div v-if="withBadge" :class="badgeClass">
            {{ date.format('D/M') }}
        </div>

        <div :class="panelClasses">

            <div class="overlay" @click="onOverlayClick">
                <i class="fa fa fa-5x fa-pencil-square-o"></i>
            </div>

            <div class="timeline-heading">

                <h4 class="timeline-title">

                    <template v-if="operationEnvelope">
                        <i class="fa fa-fw {{ operationEnvelope.icon }}"></i>
                        {{ operationEnvelope.name }}
                    </template>

                    <template v-else>
                        {{ text.operations.attributes.no_envelope }}
                    </template>

                    <b>
                        {{ operation.amount }}
                        {{ operationCurrency.name }}
                    </b>

                </h4>

                <p v-if="operationAccount" class="text-muted">
                    <small>
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
                    'timeline-editable': this.operation.type !== 'income',
                    'with-arrow': this.withBadge,
                    'info': this.operation.type === 'income',
                    'danger': this.operation.type === 'outcome',
                    'success': this.operation.type === 'revenue',
                    'warning': this.operation.type === 'transfer',
                }

            },

        },

        methods: {
            onOverlayClick: function () {
                this.$dispatch('set-current-event', this.operation)
            },
        },

    }

</script>



<style scoped>

    .timeline-panel {
        background-color: white;
    }

    .timeline-panel .overlay {
        display: none;
        background-color: #eeeeee;
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        padding: 20px;
        cursor: pointer;
        opacity: 0.75;
        text-align: center;
        color: white;
    }

    .timeline-editable:hover .overlay {
        display: block;
    }

    ul:nth-child(even) .timeline-panel {
        background-color: #f9f9f9;
    }

    .timeline-inverted {
        text-align: right;
    }

    .timeline-title b {
        float: right;
    }

    .timeline-inverted .timeline-title b,
    .timeline-inverted .text-muted  {
        float: left;
    }

</style>
