
<template>

    <ul class="timeline">
        <template v-for="day in days">
            <operations-day :with-badge="true"
                :operation="dayOperations(day)[0]"
                :date="day"></operations-day>
            <operations-day v-for="operation in dayOperations(day).slice(1)"
                :operation="operation"
                :date="day"></operations-day>
        </template>
    </ul>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var OperationsDay = require('components/operations/day.vue')

    export default {

        mixins: [mixins.vuex],

        props: ['month'],

        computed: {

            days: function () {
                var days = []

                for (var i = this.month.daysInMonth(); i > 0; --i) {
                    days.push(this.month.clone().date(i))
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
            OperationsDay,
        },

    }

</script>



<style scoped>

    ul:nth-child(odd){
        background-color: #f9f9f9;
    }

</style>
