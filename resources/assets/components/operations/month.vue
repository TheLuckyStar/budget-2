
<template>

    <ul class="timeline" id="/operations?{{ month.format('YYYY-MM') }}">
        <template v-for="day in days">
            <operations-panel :with-badge="true"
                :operation="dayOperations(day)[0]"
                :date="day"></operations-panel>
            <operations-panel v-for="operation in dayOperations(day).slice(1)"
                :operation="operation"
                :date="day"></operations-panel>
        </template>
    </ul>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var OperationsPanel = require('components/operations/panel.vue')

    export default {

        mixins: [mixins.vuex],

        props: ['month'],

        computed: {

            days: function () {
                var days = []

                for (var i = this.month.daysInMonth(); i > 0; --i) {
                    var day = this.month.clone().date(i)
                    if (this.dayOperations(day).length) {
                        days.push(day)
                    }
                }

                return days
            },

        },

        methods: {
            dayOperations: function (day) {
                if (this.operations[day.year()][day.month()][day.date()] === undefined) {
                    return []
                }

                return this.operations[day.year()][day.month()][day.date()]
            },
        },

        components: {
            OperationsPanel,
        },

    }

</script>



<style scoped>

    ul:nth-child(odd) {
        background-color: #f9f9f9;
    }

</style>
