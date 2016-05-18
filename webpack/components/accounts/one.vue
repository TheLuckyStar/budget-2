
<template>

    <div>

        <h1>
            {{ account.name }}
        </h1>

        <hr>

        <div class="col-md-6">
            <layout-card color="primary"
                icon="fa-balance-scale"
                :title="text.accounts.situation.title"
                :text="account.balance"
                :comment="$options.filters.fullDate(date)"
            ></layout-card>
        </div>


        <div class="col-md-6">
            <accounts-form :account="account"></accounts-form>
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
                date: moment(),
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

        watch: {
            currentLanguage: function() {
                this.date = moment.unix(this.date.unix())
            },
        },

        vuex: {
            getters: {
                currentLanguage: getters.getCurrentLanguage,
                accounts: getters.getAccounts,
                text: getters.getText,
            },
        },

        components: {
            AccountsForm,
        },

    }

</script>
