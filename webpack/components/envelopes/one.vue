
<template>

    <div>

        <h1>
            <i class="fa {{ envelope.icon }}"></i>
            {{ envelope.name }}
        </h1>

        <hr>

        <div class="col-md-6">
            <layout-card :color="envelope.balance < 0 ? 'danger' : 'success'"
                icon="fa-balance-scale"
                :title="text.envelopes.situation.title"
                :text="envelope.balance"
                :comment="$options.filters.fullDate(date)"
            ></layout-card>
        </div>

        <div class="col-md-6">
            <envelopes-form :envelope="envelope"></envelopes-form>
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
                date: moment(),
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

        watch: {
            currentLanguage: function() {
                this.date = moment.unix(this.date.unix())
            },
        },

        vuex: {
            getters: {
                envelopes: getters.getEnvelopes,
                currentLanguage: getters.getCurrentLanguage,
                text: getters.getText,
            },
        },

        components: {
            EnvelopesForm,
            EnvelopesReportsBalance,
        },

    }

</script>
