
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
                    {{ text.accounts.development.yearly }}
                </a>
            </li>

        </ul>

        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="monthly">
                <layout-chart type="line" :labels="listDaysInMonth(developmentDate)" :data="monthlyData" :fill="false"></layout-chart>
            </div>

            <div role="tabpanel" class="tab-pane" id="yearly">

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
                        label: this.text.accounts.development.labels[0],
                        data: this.accountDevelopment.monthly.balance,
                        borderColor: 'default',
                        backgroundColor: 'default',
                        fillColor: 'white',
                        fill: false,
                    }, {
                        label: this.text.accounts.development.labels[1],
                        data: this.accountDevelopment.monthly.revenues,
                        borderColor: 'success',
                        backgroundColor: 'success',
                        fillColor: 'white',
                        fill: false,
                    }, {
                        label: this.text.accounts.development.labels[2],
                        data: this.accountDevelopment.monthly.incomingTransfers,
                        borderColor: 'info',
                        backgroundColor: 'info',
                        fillColor: 'white',
                        fill: false,
                    }, {
                        label: this.text.accounts.development.labels[3],
                        data: this.accountDevelopment.monthly.outgoingTransfers,
                        borderColor: 'warning',
                        backgroundColor: 'warning',
                        fillColor: 'white',
                        fill: false,
                    }, {
                        label: this.text.accounts.development.labels[4],
                        data: this.accountDevelopment.monthly.outcomes,
                        borderColor: 'danger',
                        backgroundColor: 'danger',
                        fillColor: 'white',
                        fill: false,
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
