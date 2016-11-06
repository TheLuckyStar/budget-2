<template>

    <div class="incomes-inputs col-xs-12 col-sm-4 col-md-3 col-lg-2">
        <div class="panel panel-default">

            <div class="panel-heading clearfix">
                <div class="row">
                    <div class="col-xs-6">
                        {{ month.format('MMMM YYYY') }}
                    </div>
                    <div class="col-xs-6 text-right">
                        <select class="form-control pull-right input-sm" v-model="currencyIdInMonth">
                            <option v-for="currency in currencies" :value="currency.id">
                                {{ currency.name }}
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <ul class="list-group">

                <li v-for="envelope in envelopes" class="list-group-item">
                    <div class="input-group input-group-sm" v-if="incomesInMonth[envelope.id]">
                        <span class="input-group-addon" :title="envelope.name">
                            <i class="fa fa-fw {{ envelope.icon }}"></i>
                        </span>
                        <input type="text" v-model="incomesInMonth[envelope.id].amount" placeholder=" " class="form-control text-right">
                        <span class="input-group-addon" :title="envelope.name">
                            {{ currencyNameInMonth }}
                        </span>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="input-group input-group-sm">
                        <span class="input-group-addon">
                            &sum;
                        </span>
                        <input type="text" v-model="totalInMonth" class="form-control text-right" readonly>
                        <span class="input-group-addon" :title="envelope.name">
                            {{ currencyNameInMonth }}
                        </span>
                    </div>
                </li>

            </ul>

        </div>
    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        props: ['month'],

        data: function () {
            return {
                incomesInMonth: {},
                currencyIdInMonth: null,
            }
        },

        computed: {

            totalInMonth: function () {
                var component = this

                return Object.keys(this.incomesInMonth).reduce(function (total, key) {
                    if (component.incomesInMonth[key].amount === '') {
                        return total
                    }

                    return total + parseFloat(component.incomesInMonth[key].amount)
                }, 0)
            },

            currencyNameInMonth: function () {
                var key = Object.keys(this.currencies).filter(function(key) {
                    return this.currencies[key].id == this.currencyIdInMonth
                }, this)[0]

                if (this.currencies[key]) {
                    return this.currencies[key].name;
                }

                return ''
            },

        },

        created: function () {
            this.refreshIncomesInMonth()
            this.refreshCurrencyInMonth()
        },

        methods: {

            refreshIncomesInMonth: function () {
                Object.keys(this.incomes).filter(function(key) {
                    return this.incomes[key].date.isSame(this.month, 'month')
                }, this).forEach(function(key) {
                    this.incomesInMonth = Object.assign(
                        {},
                        this.incomesInMonth,
                        {
                            [this.incomes[key].envelope_id]: {
                                id: this.incomes[key].id,
                                envelope_id: this.incomes[key].envelope_id,
                                currency_id: this.incomes[key].currency_id,
                                amount: this.incomes[key].amount,
                                date: this.incomes[key].date,
                            },
                        }
                    )
                }, this)

                Object.keys(this.envelopes).filter(function(key) {
                    return this.incomesInMonth[this.envelopes[key].id] === undefined
                }, this).forEach(function(key) {
                    this.incomesInMonth = Object.assign(
                        {},
                        this.incomesInMonth,
                        {
                            [this.envelopes[key].id]: {
                                envelope_id: this.envelopes[key].id,
                                amount: '',
                                date: this.month.clone(),
                            },
                        }
                    )
                }, this)
            },

            refreshCurrencyInMonth: function () {
                if (this.incomesInMonth.length) {
                    this.currencyIdInMonth = this.incomesInMonth[Object.keys(this.incomesInMonth)[0]].currency_id
                }

                if (this.currencyIdInMonth === undefined || this.currencyIdInMonth === null) {
                    this.currencyIdInMonth = this.currentCurrency.id
                }
            },

        },

        watch: {

            incomes: function () {
                this.refreshIncomesInMonth()
                this.refreshCurrencyInMonth()
            },

            envelopes: function () {
                this.refreshIncomesInMonth()
                this.refreshCurrencyInMonth()
            },

        },

    }

</script>



<style scoped>

    .panel-heading, .list-group-item {
        padding: 6px 9px;
    }

    .input-group input[type=text]:placeholder-shown {
        background-color: #f9f9f9;
    }

</style>
