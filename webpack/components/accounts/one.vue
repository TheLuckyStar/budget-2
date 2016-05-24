
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

    var mixins = require('scripts/mixins.js')
    var AccountsDevelopment = require('components/accounts/development.vue')
    var AccountsForm = require('components/accounts/form.vue')

    export default {

        mixins: [mixins.vuex],

        data: function () {
            return {
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

        components: {
            AccountsDevelopment,
            AccountsForm,
        },

    }

</script>
