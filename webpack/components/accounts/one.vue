
<template>

    <div>

        <h1>
            {{ account.name }}
        </h1>

        <hr>

        <div class="col-lg-3 col-md-6">
            <layout-card color="primary"
                icon="fa-balance-scale"
                :title="text.accounts.situation.title"
                text="1000.00 €"
                :comment="text.accounts.balance.title"
            ></layout-card>
        </div>


        <div class="col-lg-3 col-md-6">
            <accounts-form :account="account"></accounts-form>
        </div>

        <div class="col-lg-3 col-md-6">
            <chart-pie :title="text.accounts.balance.title"
                :labels="text.accounts.balance.labels"
                :data="balanceData"
                :colors="['danger', 'success', 'warning']"></chart-pie>
        </div>

    </div>

</template>



<script>

    var getters = require('vuex/getters.js')
    var AccountsForm = require('components/accounts/form.vue')

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
            balanceData: function () {
                return [300, 50, 100]
            },
        },

        vuex: {
            getters: {
                accounts: getters.getAccounts,
                text: getters.getText,
            },
        },

        components: {
            AccountsForm,
        },

    }

</script>
