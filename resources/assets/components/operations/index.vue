
<template>

    <div class="row">
        <div class="col-md-12">
            <template v-for="month in months">
                <operations-timeline :month="month" :operation-list="monthOperations(month)"></operations-timeline>
            </template>
        </div>
    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var OperationsTimeline = require('components/operations/timeline.vue')

    export default {

        mixins: [mixins.vuex],

        computed: {

            months: function () {
                var unordered = this.operations.reduce(function (months, operation) {
                    months[operation.date.format("YYYY-MM")] = operation.date
                    return months
                }, {})

                var ordered = Object.keys(unordered).map(function(key) {
                    return unordered[key]
                }).sort(function (a, b) {
                    return a.isBefore(b, 'day') ? 1 : -1
                })

                return ordered
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
            OperationsTimeline,
        },

    }

</script>
