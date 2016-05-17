
<template>

    <form v-on:submit.prevent="onSubmit" class="form-horizontal">

        <fieldset>

            <legend>
                {{ text.accounts.enable.title }}
                {{ account.name }}
            </legend>

            <div class="form-group">
                <label for="input-account-name" class="col-lg-2 col-md-3 col-sm-4 control-label">
                    {{ text.accounts.edit.name }}
                </label>
                <div class="col-lg-10 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="input-account-name" v-model="account.name" disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="input-account-currency" class="col-lg-2 col-md-3 col-sm-4 control-label">
                    {{ text.accounts.edit.currency }}
                </label>
                <div class="col-lg-10 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="input-account-currency" v-model="currency" disabled>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2 text-right">
                    <button type="submit" class="btn btn-primary">
                        {{ text.app.enable }}
                    </button>
                </div>
            </div>

        </fieldset>

    </form>

</template>



<script>

    var actions = require('vuex/actions.js')
    var getters = require('vuex/getters.js')

    export default {

        computed: {
            account: function () {
                return this.$options.filters.find(this.disabledAccounts, 'id', this.$route.params.account_id)
            },
        },

        methods: {
            onSubmit: function () {
                this.updateAccount(this.account.id, { deleted_at: null })
            },
        },

        vuex: {
            actions: {
                updateAccount: actions.updateAccount,
            },
            getters: {
                disabledAccounts: getters.getDisabledAccounts,
                text: getters.getText,
            },
        },

    }

</script>
