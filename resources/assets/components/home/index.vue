
<template>

    <div>
        <home-account-savings></home-account-savings>
        <home-envelope-savings></home-envelope-savings>
        <home-best-envelopes></home-best-envelopes>
        <home-worst-envelopes></home-worst-envelopes>
    </div>

</template>



<script>

    var HomeAccountSavings = require('components/home/account-savings.vue')
    var HomeEnvelopeSavings = require('components/home/envelope-savings.vue')
    var HomeBestEnvelopes = require('components/home/best-envelopes.vue')
    var HomeWorstEnvelopes = require('components/home/worst-envelopes.vue')

    export default {

        components: {
            HomeAccountSavings,
            HomeEnvelopeSavings,
            HomeBestEnvelopes,
            HomeWorstEnvelopes,
        },

    }

</script>
