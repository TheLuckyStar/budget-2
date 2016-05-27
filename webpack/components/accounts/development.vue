
<template>

    <fieldset>

        <legend>
            {{ text.accounts.development.title }}
        </legend>

        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a href="#monthly" role="tab" data-toggle="tab">
                    <span v-on:click.prevent="setDevelopementDate(prevMonth)" class="btn-link" :title="prevMonth | formatLongMonth">
                        <i class="fa fa-chevron-left"></i>
                    </span>
                    {{ developmentDate | formatLongMonth }}
                    <span v-on:click.prevent="setDevelopementDate(nextMonth)" class="btn-link" :title="nextMonth | formatLongMonth">
                        <i class="fa fa-chevron-right"></i>
                    </span>
                </a>
            </li>

            <li role="presentation">
                <a href="#yearly" role="tab" data-toggle="tab">
                    <span v-on:click.prevent="setDevelopementDate(prevYear)" class="btn-link" :title="prevYear | formatYear">
                        <i class="fa fa-chevron-left"></i>
                    </span>
                    {{ developmentDate | formatYear }}
                    <span v-on:click.prevent="setDevelopementDate(nextYear)" class="btn-link" :title="nextYear | formatYear">
                        <i class="fa fa-chevron-right"></i>
                    </span>
                </a>
            </li>

        </ul>

        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="monthly">
                <layout-chart type="line" :chart-labels="listDaysInMonth(developmentDate)" :data="monthlyData" :data-labels="text.accounts.development.labels"></layout-chart>
            </div>

            <div role="tabpanel" class="tab-pane" id="yearly">
                <layout-chart type="line" :chart-labels="listMonthsInYear(developmentDate)" :data="yearlyData" :data-labels="text.accounts.development.labels"></layout-chart>
            </div>

        </div>

    </fieldset>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex, mixins.moment],

        computed: {

            prevMonth: function () {
                return moment(this.developmentDate).subtract(1, 'month')
            },

            nextMonth: function () {
                return moment(this.developmentDate).add(1, 'month')
            },

            monthlyData: function () {
                return  [
                    {
                        data: this.accountDevelopment.monthly.balance,
                        borderColor: 'default',
                        backgroundColor: 'default',
                    }, {
                        data: this.accountDevelopment.monthly.revenues,
                        borderColor: 'success',
                        backgroundColor: 'success',
                    }, {
                        data: this.accountDevelopment.monthly.incomingTransfers,
                        borderColor: 'info',
                        backgroundColor: 'info',
                    }, {
                        data: this.accountDevelopment.monthly.outgoingTransfers,
                        borderColor: 'warning',
                        backgroundColor: 'warning',
                    }, {
                        data: this.accountDevelopment.monthly.outcomes,
                        borderColor: 'danger',
                        backgroundColor: 'danger',
                    },
                ]
            },

            yearlyData: function () {
                return  [
                    {
                        data: this.accountDevelopment.yearly.balance,
                        borderColor: 'default',
                        backgroundColor: 'default',
                    }, {
                        data: this.accountDevelopment.yearly.revenues,
                        borderColor: 'success',
                        backgroundColor: 'success',
                    }, {
                        data: this.accountDevelopment.yearly.incomingTransfers,
                        borderColor: 'info',
                        backgroundColor: 'info',
                    }, {
                        data: this.accountDevelopment.yearly.outgoingTransfers,
                        borderColor: 'warning',
                        backgroundColor: 'warning',
                    }, {
                        data: this.accountDevelopment.yearly.outcomes,
                        borderColor: 'danger',
                        backgroundColor: 'danger',
                    },
                ]
            },

            prevYear: function () {
                return moment(this.developmentDate).subtract(1, 'year')
            },

            nextYear: function () {
                return moment(this.developmentDate).add(1, 'year')
            },

        },

    }

</script>



<style scoped>

    .tab-pane {
        padding: 20px;
    }

    .btn-link {
        cursor: pointer;
        padding: 0px 5px;
        visibility: hidden;
    }

    .active .btn-link {
        visibility: visible;
    }

</style>
