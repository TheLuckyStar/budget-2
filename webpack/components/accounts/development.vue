
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

            <li role="presentation">
                <a href="#anytime" aria-controls="anytime" role="tab" data-toggle="tab">
                    {{ text.accounts.development.anytime }}

                </a>
            </li>

        </ul>

        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="monthly">
                <layout-chart type="line" :labels="monthlyLabels" :data="monthlyData"></layout-chart>
            </div>

            <div role="tabpanel" class="tab-pane" id="yearly">

            </div>

            <div role="tabpanel" class="tab-pane" id="anytime">

            </div>

        </div>

    </fieldset>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex, mixins.moment],

        computed: {

            monthlyLabels: function () {
                if (this.language) {
                    var tmp = undefined
                }
                return this.listDaysInMonth(this.developmentDate)
            },

            monthlyData: function () {
                return  [
                    {
                        label: this.text.accounts.development.labels[0],
                        data: this.accountDevelopment.monthly.balance,
                        backgroundColor: 'primary',
                    }, {
                        label: this.text.accounts.development.labels[1],
                        data: this.accountDevelopment.monthly.revenues,
                        backgroundColor: 'success',
                    }, {
                        label: this.text.accounts.development.labels[2],
                        data: this.accountDevelopment.monthly.outcomes,
                        backgroundColor: 'danger',
                    },
                ]
            },

        },

    }

</script>
