
<template>

    <ul class="timeline">
        <operations-panel v-for="operation in operationList" :operation="operation"></operations-panel>
    </ul>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var OperationsPanel = require('components/operations/panel.vue')

    export default {

        mixins: [mixins.vuex],

        props: ['month', 'operationList'],

        components: {
            OperationsPanel,
        },

    }

</script>



<style scoped>

    ul:nth-child(odd){
        background-color: #f9f9f9;
    }

</style>
