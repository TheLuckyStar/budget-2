
<template>

    <div class="row">

        <div class="col-md-12">

            <h1>
                {{ title }}
            </h1>

            <hr>

        </div>

        <template v-if="data.recent_savings" v-for="(index, period) in dates">

            <div v-if="index % 2 === 0" class="clearfix hidden-xs"></div>

            <div class="col-sm-6">
                <layout-card :color="data.recent_savings[period.key] < 0 ? 'danger' : 'success'"
                    :icon="data.recent_savings[period.key] < 0 ? 'fa-level-down' : 'fa-level-up'"
                    :text="data.recent_savings[period.key]"
                    :comment="period.date
                        ? $options.filters.formatShortMonth(period.date)
                        : $options.filters.formatShortMonth(period.from)
                            + ' - '
                            + $options.filters.formatShortMonth(period.to)"
                ></layout-card>
            </div>

        </template>

    </div>

</template>



<script>

    export default {

        props: ['title', 'data'],

        data: function () {
            return {
                date: moment(),
            }
        },

        computed: {
            dates: function () {
                return [
                    {
                        key: 'monthly',
                        date: this.date.clone().date(1),
                    },
                    {
                        key: 'quarterly',
                        from: this.date.clone().date(1).subtract(3, 'months'),
                        to: this.date.clone().date(31).subtract(1, 'months'),
                    },
                    {
                        key: 'biannually',
                        from: this.date.clone().date(1).subtract(6, 'months'),
                        to: this.date.clone().date(31).subtract(1, 'months'),
                    },
                    {
                        key: 'yearly',
                        from: this.date.clone().date(1).subtract(12, 'months'),
                        to: this.date.clone().date(31).subtract(1, 'months'),
                    },
                ]
            },
        },

        watch: {
            language: function() {
                this.date = moment.unix(this.date.unix())
            },
        },

    }

</script>

