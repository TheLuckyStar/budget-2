
<template>

    <fieldset>

        <legend>
            {{ text.accounts.development.title }}
        </legend>

        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a href="#monthly" aria-controls="monthly" role="tab" data-toggle="tab">
                    {{ text.accounts.development.monthly }}
                </a>
            </li>

            <li role="presentation">
                <a href="#yearly" aria-controls="yearly" role="tab" data-toggle="tab">
                    {{ text.accounts.development.yearly }}
                </a>
            </li>

        </ul>

        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="monthly">
                <div class="text-center">
                    <ul class="nav nav-pills nav-justified">
                        <li>
                            <button v-on:click.stop="setDevelopementDate(prevMonth)" class="btn btn-default">
                                {{ prevMonth | formatLongMonth }}
                            </button>
                        </li>
                        <li class="active">
                            <a v-on:click.stop>
                                {{ developmentDate | formatLongMonth }}
                            </a>
                        </li>
                        <li>
                            <button v-on:click.stop="setDevelopementDate(nextMonth)" class="btn btn-default">
                                {{ nextMonth | formatLongMonth }}
                            </button>
                        </li>
                    </ul>
                </div>
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

    .nav-pills {
        margin-bottom: 20px;
    }

</style>
