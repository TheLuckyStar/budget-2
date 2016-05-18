
<template>

    <div>

        <h1>
            <i class="fa {{ envelope.icon }}"></i>
            {{ envelope.name }}
        </h1>

        <hr>

        <div class="col-md-6">
            <envelopes-form :envelope="envelope"></envelopes-form>
        </div>

        <div class="col-md-6">
            <envelopes-reports-balance :envelope="envelope"></envelopes-reports-balance>
        </div>

        <div class="col-md-6">
            <envelopes-reports-balance :envelope="envelope"></envelopes-reports-balance>
        </div>

        <div class="col-md-6">
            <envelopes-reports-balance :envelope="envelope"></envelopes-reports-balance>
        </div>

    </div>

</template>



<script>

    var getters = require('vuex/getters.js')
    var EnvelopesForm = require('components/envelopes/form.vue')
    var EnvelopesReportsBalance = require('components/envelopes/reports/balance.vue')

    export default {

        data: function () {
            return {
                envelope_id: null,
            }
        },

        route: {
            data: function () {
                this.envelope_id = this.$route.params.envelope_id
            },
        },

        computed: {
            envelope: function () {
                return this.$options.filters.find(this.envelopes, 'id', this.envelope_id)
            },
        },

        vuex: {
            getters: {
                envelopes: getters.getEnvelopes,
            },
        },

        components: {
            EnvelopesForm,
            EnvelopesReportsBalance,
        },

    }

</script>
