
<template>

    <fieldset>

        <legend>

            {{ text.accounts.development.title }}

        </legend>

        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active" v-if="account.id === undefined">
                <a href="#state" role="tab" data-toggle="tab">
                    {{ text.accounts.development.stateTitle }}
                </a>
            </li>

            <li role="presentation" class="{{ account.id ? 'active' : '' }}">
                <a href="#operations" role="tab" data-toggle="tab">
                    {{ text.accounts.development.operationsTitle }}
                </a>
            </li>

            <li role="presentation" class="pull-right">

                <span v-on:click="setDevelopmentDate(prevYear)" class="btn-link" :title="prevYear | formatYear">
                    <i class="fa fa-chevron-left"></i>
                </span>

                {{ developmentDate | formatYear }}

                <span v-on:click="setDevelopmentDate(nextYear)" class="btn-link" :title="nextYear | formatYear">
                    <i class="fa fa-chevron-right"></i>
                </span>

            </li>

        </ul>

        <div class="tab-content">

             <div role="tabpanel" class="tab-pane active" id="state" v-if="account.id === undefined">
                <layout-chart type="bar" :labels="listMonthsInYear(this.developmentDate)"
                    :datasets="stateData"></layout-chart>
            </div>

            <div role="tabpanel" class="tab-pane {{ account.id ? 'active' : '' }}" id="operations">
                <layout-chart type="bar" :labels="listMonthsInYear(this.developmentDate)"
                    :datasets="operationsData"></layout-chart>
            </div>

        </div>

    </fieldset>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex, mixins.moment, mixins.development],

        computed: {

            stateData: function () {
                return [
                    {
                        type: 'line',
                        data: this.accountDevelopment.yearly ? this.accountDevelopment.yearly.balance : [],
                        label: this.text.accounts.development.balanceLabel,
                        color: 'default',
                    },
                    {
                        type: 'line',
                        data: this.accountDevelopment.yearly ? this.accountDevelopment.yearly.accumulated_savings : [],
                        label: this.text.accounts.development.accumulatedSavingsLabel,
                        color: 'primary',
                    },
                    {
                        type: 'bar',
                        data: this.accountDevelopment.yearly ? this.accountDevelopment.yearly.monthly_savings : [],
                        label: this.text.accounts.development.monthlySavingsLabel,
                        color: 'info',
                    },
                ]
            },

            operationsData: function () {
                return [
                    {
                        type: 'line',
                        data: this.accountDevelopment.yearly ? this.accountDevelopment.yearly.balance : [],
                        label: this.text.accounts.development.balanceLabel,
                        color: 'default',
                    },
                    {
                        type: 'line',
                        data: this.accountDevelopment.yearly ? this.accountDevelopment.yearly.revenues : [],
                        label: this.text.accounts.development.revenuesLabel,
                        color: 'success',
                    }, {
                        type: 'line',
                        data: this.accountDevelopment.yearly ? this.accountDevelopment.yearly.incomingTransfers : [],
                        label: this.text.accounts.development.incomingTransfersLabel,
                        color: 'info',
                    }, {
                        type: 'line',
                        data: this.accountDevelopment.yearly ? this.accountDevelopment.yearly.outgoingTransfers : [],
                        label: this.text.accounts.development.outgoingTransfersLabel,
                        color: 'warning',
                    }, {
                        type: 'line',
                        data: this.accountDevelopment.yearly ? this.accountDevelopment.yearly.outcomes : [],
                        label: this.text.accounts.development.outcomesLabel,
                        color: 'danger',
                    },
                ]
            },

        },

        ready: function () {
            var component = this
            jQuery(this.$el).find('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                component.$broadcast('resize-chart')
            })
        },

    }

</script>



<style scoped>

    li.pull-right {
        margin-top: 14px;
    }

    .btn-link {
        cursor: pointer;
        padding: 0px 5px;
    }

    .tab-pane {
        min-height: 400px;
    }

</style>
