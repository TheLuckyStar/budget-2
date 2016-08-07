
<template>

    <fieldset>

        <legend>

            {{ text.envelopes.development.title }}

        </legend>

        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a href="#state" role="tab" data-toggle="tab">
                    {{ text.envelopes.development.stateTitle }}
                </a>
            </li>

            <li role="presentation">
                <a href="#operations" role="tab" data-toggle="tab">
                    {{ text.envelopes.development.operationsTitle }}
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

            <div role="tabpanel" class="tab-pane active" id="state">
                <layout-chart type="bar" :labels="listMonthsInYear(this.developmentDate)"
                    :datasets="stateData"></layout-chart>
            </div>

            <div role="tabpanel" class="tab-pane" id="operations">
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
                        data: this.envelopeDevelopment.balance,
                        label: this.text.envelopes.development.balanceLabel,
                        color: 'default',
                    },
                    {
                        type: 'bar',
                        data: this.envelopeDevelopment.savings,
                        label: this.text.envelopes.development.savingsLabel,
                        color: 'primary',
                    },
                ]
            },

            operationsData: function () {
                return [
                    {
                        type: 'line',
                        data: this.envelopeDevelopment.balance,
                        label: this.text.envelopes.development.balanceLabel,
                        color: 'default',
                    },
                    {
                        type: 'line',
                        data: this.envelopeDevelopment.revenues,
                        label: this.text.envelopes.development.revenuesLabel,
                        color: 'success',
                    },
                    {
                        type: 'line',
                        data: this.envelopeDevelopment.incomes,
                        label: this.text.envelopes.development.incomesLabel,
                        color: 'info',
                    },
                    {
                        type: 'line',
                        data: this.envelopeDevelopment.outcomes,
                        label: this.text.envelopes.development.outcomesLabel,
                        color: 'warning',
                    },
                ]
            },

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

</style>
