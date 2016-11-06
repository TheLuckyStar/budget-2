
<template>

    <div id="incomes-index">
        <div class="row">

            <div class="incomes-envelopes hidden-xs col-sm-4 col-md-3 col-lg-2">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        {{ text.incomes.page.envelopesTitle }}
                    </div>

                    <ul class="list-group">
                        <li v-for="envelope in envelopes" class="list-group-item">
                            <i class="fa fa-fw {{ envelope.icon }}"></i>
                            {{ envelope.name }}
                            <span class="badge badge-{{ envelope.state.balance < 0 ? 'danger' : 'success' }} pull-right">
                                {{ envelope.state.balance }}
                            </span>
                        </li>
                        <li class="list-group-item">
                            {{ text.incomes.page.monthlySum }}
                        </li>
                    </ul>

                </div>
            </div>

            <div class="incomes-invisible hidden-xs col-xs-12 col-sm-4 col-md-3 col-lg-2">&nbsp;</div>

            <incomes-month v-for="month in months" :month="month"></incomes-month>

        </div>
    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var IncomesMonth = require('components/incomes/month.vue')

    export default {

        mixins: [mixins.vuex],

        created: function () {
            this.$emit('refresh-data')
        },

        computed: {
            months: function () {
                var min = Object.keys(this.incomes).map(function(key) {
                    return this.incomes[key].date.clone().startOf('month')
                }, this).reduce(function (minimum, date) {
                    return moment.min(minimum, date)
                }, moment().startOf('month'))
                console.log(min.format('LLL'))

                var months = []
                for (var date = moment().startOf('month'); date.isSameOrAfter(min); date.subtract(1, 'month')) {
                    months.push(date.clone())
                }

                return months
            }
        },

        events: {
            'refresh-data': function () {
                this.refreshEnvelopes()
                this.refreshIncomes()
                return true
            },
        },

        components: {
            IncomesMonth,
        },

    }

</script>



<style scoped>

    #incomes-index {
        overflow-x: auto;
        white-space: nowrap;
    }

    .incomes-envelopes, .incomes-invisible, .incomes-inputs {
        display: inline-block;
        float: none;
    }

    .incomes-envelopes {
        position: absolute;
        z-index: 10;
    }

</style>
