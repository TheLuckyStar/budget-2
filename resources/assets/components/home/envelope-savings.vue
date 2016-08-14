
<template>

    <div class="row">

        <div class="col-md-12">

            <h1>
                {{ text.home.envelopeSavings.title }}
            </h1>

            <hr>

        </div>

        <div class="col-md-3 col-sm-6">
            <layout-card :color="0 < 0 ? 'danger' : 'success'"
                :icon="0 < 0 ? 'fa-level-down' : 'fa-level-up'"
                :text="0"
                :comment="text.home.envelopeSavings.monthlyTitle"
            ></layout-card>
        </div>

        <div class="col-md-3 col-sm-6">
            <layout-card :color="0 < 0 ? 'danger' : 'success'"
                :icon="0 < 0 ? 'fa-level-down' : 'fa-level-up'"
                :text="0"
                :comment="text.home.envelopeSavings.quarterlyTitle"
            ></layout-card>
        </div>

        <div class="col-md-3 col-sm-6">
            <layout-card :color="0 < 0 ? 'danger' : 'success'"
                :icon="0 < 0 ? 'fa-level-down' : 'fa-level-up'"
                :text="0"
                :comment="text.home.envelopeSavings.biannuallyTitle"
            ></layout-card>
        </div>

        <div class="col-md-3 col-sm-6">
            <layout-card :color="0 < 0 ? 'danger' : 'success'"
                :icon="0 < 0 ? 'fa-level-down' : 'fa-level-up'"
                :text="0"
                :comment="text.home.envelopeSavings.yearlyTitle"
            ></layout-card>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

    }

</script>

