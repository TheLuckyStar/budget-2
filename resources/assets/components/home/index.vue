
<template>

    <div class="row">
        <div class="col-md-6">
            <home-savings :title="text.home.accountSavings.title" :data="accountDevelopment"></home-savings>
        </div>
        <div class="col-md-6">
            <home-savings :title="text.home.envelopeSavings.title" :data="envelopeDevelopment"></home-savings>
        </div>
        <div class="clearfix visible-md visible-lg"></div>
        <div class="col-md-6">
            <home-envelopes :title="text.home.bestEnvelopes.title" :data="bestEnvelopes"></home-envelopes>
        </div>
        <div class="col-md-6">
            <home-envelopes :title="text.home.worstEnvelopes.title" :data="worstEnvelopes"></home-envelopes>
        </div>
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
