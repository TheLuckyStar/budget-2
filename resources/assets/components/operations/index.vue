
<template>

    <div class="row">
        <div class="col-md-12">
            <template v-for="month in months">
                <operations-month :month="month"></operations-month>
            </template>
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

        },

        created: function () {
            this.$emit('refresh-data')
        },

        methods: {
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
