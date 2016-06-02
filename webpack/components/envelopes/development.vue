
<template>

    <fieldset>

        <legend>
            {{ text.envelopes.development.title }}
        </legend>

        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a href="#monthly" role="tab" data-toggle="tab">
                    <span v-on:click.prevent="setDevelopmentDate(prevMonth)" class="btn-link" :title="prevMonth | formatLongMonth">
                        <i class="fa fa-chevron-left"></i>
                    </span>
                    {{ developmentDate | formatLongMonth }}
                    <span v-on:click.prevent="setDevelopmentDate(nextMonth)" class="btn-link" :title="nextMonth | formatLongMonth">
                        <i class="fa fa-chevron-right"></i>
                    </span>
                </a>
            </li>

            <li role="presentation">
                <a href="#yearly" role="tab" data-toggle="tab">
                    <span v-on:click.prevent="setDevelopmentDate(prevYear)" class="btn-link" :title="prevYear | formatYear">
                        <i class="fa fa-chevron-left"></i>
                    </span>
                    {{ developmentDate | formatYear }}
                    <span v-on:click.prevent="setDevelopmentDate(nextYear)" class="btn-link" :title="nextYear | formatYear">
                        <i class="fa fa-chevron-right"></i>
                    </span>
                </a>
            </li>

        </ul>

        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="monthly">
                <layout-chart type="line" :chart-labels="listDaysInMonth(developmentDate)" :data="monthlyData" :data-labels="text.envelopes.development.labels"></layout-chart>
            </div>

            <div role="tabpanel" class="tab-pane" id="yearly">
                <layout-chart type="line" :chart-labels="listMonthsInYear(developmentDate)" :data="yearlyData" :data-labels="text.envelopes.development.labels"></layout-chart>
            </div>

        </div>

    </fieldset>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex, mixins.moment, mixins.development],

        computed: {

            monthlyData: function () {
                return  [
                    {
                        data: this.envelopeDevelopment.monthly.balance,
                        color: 'default',
                    }, {
                        data: this.envelopeDevelopment.monthly.revenues,
                        color: 'success',
                    }, {
                        data: this.envelopeDevelopment.monthly.incomes,
                        color: 'info',
                    }, {
                        data: this.envelopeDevelopment.monthly.outcomes,
                        color: 'danger',
                    },
                ]
            },

            yearlyData: function () {
                return  [
                    {
                        data: this.envelopeDevelopment.yearly.balance,
                        color: 'default',
                    }, {
                        data: this.envelopeDevelopment.yearly.revenues,
                        color: 'success',
                    }, {
                        data: this.envelopeDevelopment.yearly.incomes,
                        color: 'info',
                    }, {
                        data: this.envelopeDevelopment.yearly.outcomes,
                        color: 'danger',
                    },
                ]
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
