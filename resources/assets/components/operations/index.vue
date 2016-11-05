
<template>

    <div class="row">

        <div class="col-xs-10">
            <template v-for="month in months">
                <operations-month :month="month"></operations-month>
            </template>
        </div>

        <div class="col-xs-2">
            <ul class="list-unstyled">
                <li v-for="year in years">
                    <a href="#/operations?{{ monthsInYear(year)[0].format('YYYY-MM') }}" class="btn btn-link">
                        {{ year | formatYear }}
                    </a>
                    <ul class="list-unstyled">
                        <li v-for="month in monthsInYear(year)">
                            <a href="#/operations?{{ month.format('YYYY-MM') }}" class="btn btn-link">
                                {{ month | formatShortMonth }}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var OperationsMonth = require('components/operations/month.vue')

    export default {

        mixins: [mixins.vuex],

        computed: {

            months: function () {
                var months = []

                Object.keys(this.operations).map(function(year) {
                    Object.keys(this.operations[year]).map(function(month) {
                        months.push(moment().year(year).month(month))
                    }, this)
                }, this)

                return months.sort(function (a, b) {
                    return a < b ? 1 : -1
                })
            },

            years: function () {
                return Object.keys(this.operations)
                    .map(function (year) {
                        return moment().year(year)
                    })
                    .sort(function (a, b) {
                        return a < b ? 1 : -1
                    })
            },

        },

        created: function () {
            this.$emit('refresh-data')
        },

        methods: {

            monthsInYear: function (year) {
                return this.months.filter(function (month) {
                    return month.year() === year.year()
                })
            },

            monthOperations: function (month) {
                return this.operations.filter(function (operation) {
                    return operation.date.isBetween(month, month, 'month', '[]')
                })
            },

        },

        events: {
            'refresh-data': function () {
                this.refreshOperations()
                this.refreshAccounts()
                this.refreshEnvelopes()
                return true
            },
        },

        components: {
            OperationsMonth,
        },

    }

</script>



<style scoped>

    ul ul {
        padding-left: 20px;
    }

</style>
