
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

        <div class="col-md-12">
            <accounts-development :account="account"></accounts-development>
        </div>

    </div>

</template>



<script>

    var actions = require('vuex/actions.js')
    var getters = require('vuex/getters.js')
    var AccountsDevelopment = require('components/accounts/development.vue')
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
                this.setCurrentAccount(this.$route.params.account_id)
            },
        },

        watch: {
            currentLanguage: function() {
                this.date = moment.unix(this.date.unix())
            },
        },

        vuex: {
            actions: {
                setCurrentAccount: actions.setCurrentAccount,
            },
            getters: {
                currentLanguage: getters.getCurrentLanguage,
                account: getters.getCurrentAccount,
                text: getters.getText,
            },
        },

        components: {
            AccountsDevelopment,
            AccountsForm,
        },

    }

</script>
