
<template>

    <div>

        <div class="col-lg-3 col-md-6">
            <accounts-form :account="account"></accounts-form>
        </div>

        <div class="col-lg-3 col-md-6">
            <accounts-reports-balance :account="account"></accounts-reports-balance>
        </div>

        <div class="col-lg-3 col-md-6">
            <accounts-reports-balance :account="account"></accounts-reports-balance>
        </div>

        <div class="col-lg-3 col-md-6">
            <accounts-reports-balance :account="account"></accounts-reports-balance>
        </div>

    </div>

</template>



<script>

    var getters = require('vuex/getters.js')
    var AccountsForm = require('components/accounts/form.vue')
    var AccountsReportsBalance = require('components/accounts/reports/balance.vue')

    export default {

        data: function () {
            return {
                account_id: null,
            }
        },

        route: {
            data: function () {
                this.account_id = this.$route.params.account_id
            },
        },

        computed: {
            account: function () {
                return this.$options.filters.find(this.accounts, 'id', this.account_id)
            },
        },

        vuex: {
            getters: {
                accounts: getters.getAccounts,
            },
        },

        components: {
            AccountsForm,
            AccountsReportsBalance,
        },

    }

</script>
