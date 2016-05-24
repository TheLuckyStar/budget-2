
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
                <layout-chart type="line" :labels="balanceLabels" :data="balanceData"></layout-chart>
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

        mixins: [mixins.vuex],

        computed: {

            balanceLabels: function () {
                return this.text.envelopes.development.labels
            },

            balanceData: function () {
                return  [
                    // {
                    //     data: [300, 50, 100],
                    //     backgroundColor: ['success', 'warning', 'danger'],
                    // },
                    {
                        data: [300, 50, 100],
                        backgroundColor: 'success',
                    }, {
                        data: [350, 1000, 500],
                        backgroundColor: 'warning',
                    },
                ]
            },

        },

    }

</script>
