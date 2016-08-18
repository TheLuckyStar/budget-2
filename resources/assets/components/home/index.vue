
<template>

    <div>
        <home-account-savings></home-account-savings>
        <home-envelope-savings></home-envelope-savings>
        <home-worst-envelopes></home-worst-envelopes>
        <home-best-envelopes></home-best-envelopes>
    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var HomeAccountSavings = require('components/home/account-savings.vue')
    var HomeEnvelopeSavings = require('components/home/envelope-savings.vue')
    var HomeWorstEnvelopes = require('components/home/worst-envelopes.vue')
    var HomeBestEnvelopes = require('components/home/best-envelopes.vue')

    export default {

        mixins: [mixins.vuex],

        components: {
            HomeAccountSavings,
            HomeEnvelopeSavings,
            HomeWorstEnvelopes,
            HomeBestEnvelopes,
        },

        created: function () {
            this.$emit('refresh-data')
        },

        events: {
            'refresh-data': function () {
                this.refreshEnvelopes()
                return true
            },
        },

    }

</script>
