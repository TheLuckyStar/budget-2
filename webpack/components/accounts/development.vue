
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
                            <a v-on:click.stop="setDevelopementDate(prevMonth)">
                                {{ prevMonth | fullMonth }}
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                {{ developmentDate | fullMonth }}
                            </a>
                        </li>
                        <li>
                            <a v-on:click.stop="setDevelopementDate(nextMonth)">
                                {{ nextMonth | fullMonth }}
                            </a>
                        </li>
                    </ul>
                </div>
                <layout-chart type="line" :labels="listDaysInMonth(developmentDate)" :data="monthlyData"></layout-chart>
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
                        borderColor: 'primary',
                    }, {
                        label: this.text.accounts.development.labels[1],
                        data: this.accountDevelopment.monthly.revenues,
                        borderColor: 'success',
                    }, {
                        label: this.text.accounts.development.labels[2],
                        data: this.accountDevelopment.monthly.outcomes,
                        borderColor: 'danger',
                    },
                ]
            },

        },

    }

</script>
