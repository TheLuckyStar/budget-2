
<template>

    <fieldset>

        <legend>
            {{ text.envelopes.development.title }}
        </legend>

        <ul class="nav nav-tabs" role="tablist">

            <li role="presentation" class="active">
                <a href="#monthly" aria-controls="monthly" role="tab" data-toggle="tab">
                    {{ text.envelopes.development.monthly }}

                </a>
            </li>

            <li role="presentation">
                <a href="#yearly" aria-controls="yearly" role="tab" data-toggle="tab">
                    {{ text.envelopes.development.yearly }}
                </a>
            </li>

            <li role="presentation">
                <a href="#anytime" aria-controls="anytime" role="tab" data-toggle="tab">
                    {{ text.envelopes.development.anytime }}

                </a>
            </li>

        </ul>

        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="monthly">
                <layout-chart type="pie" :data="balanceData"></layout-chart>
            </div>

            <div role="tabpanel" class="tab-pane" id="yearly">

            </div>

            <div role="tabpanel" class="tab-pane" id="anytime">

            </div>

        </div>

    </fieldset>

</template>



<script>

    var getters = require('vuex/getters.js')

    export default {

        props: ['envelope'],

        computed: {
            balanceData: function () {
                return  {
                    labels: this.text.envelopes.development.labels,
                    datasets: [{
                        data: [300, 50, 100],
                        backgroundColor: ['success', 'warning', 'danger'],
                    }],
                }
            },
        },

        vuex: {
            getters: {
                text: getters.getText,
            },
        },

    }

</script>
