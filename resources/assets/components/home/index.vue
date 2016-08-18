
<template>

    <div>
        <home-savings :title="text.home.accountSavings.title" :data="accountDevelopment"></home-savings>
        <home-savings :title="text.home.envelopeSavings.title" :data="envelopeDevelopment"></home-savings>
        <home-envelopes :title="text.home.bestEnvelopes.title" :data="bestEnvelopes"></home-envelopes>
        <home-envelopes :title="text.home.worstEnvelopes.title" :data="worstEnvelopes"></home-envelopes>
    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var HomeSavings = require('components/home/savings.vue')
    var HomeEnvelopes = require('components/home/envelopes.vue')

    export default {

        mixins: [mixins.vuex],

        components: {
            HomeSavings,
            HomeEnvelopes,
        },

        created: function () {
            this.$emit('refresh-data')
        },

        events: {
            'refresh-data': function () {
                this.refreshEnvelopes()
                this.setCurrentEnvelope(null)
                this.setCurrentAccount(null)
                return true
            },
        },

    }

</script>
