
<template>

    <div class="col-sm-6 form-group">
        <select v-model="accountId" class="form-control">
            <option :value="null">
                {{ text.operations.filters.allAccounts }}
            </option>
            <option v-for="account in accounts" value="{{ account.id }}">
                {{ account.name }}
            </option>
        </select>
    </div>

    <div class="col-sm-6 form-group">
        <select v-model="envelopeId" class="form-control">
            <option :value="null">
                {{ text.operations.filters.allEnvelopes }}
            </option>
            <option v-for="envelope in envelopes" value="{{ envelope.id }}">
                {{ envelope.name }}
            </option>
        </select>
    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        computed: {
            accountId: {
                get: function () {
                    return this.account.id
                },
                set: function (accountId) {
                    this.setOperationFilters(accountId, this.envelopeId)
                },
            },
            envelopeId: {
                get: function () {
                    return this.envelope.id
                },
                set: function (envelopeId) {
                    this.setOperationFilters(this.accountId, envelopeId)
                },
            },
        },

    }

</script>
