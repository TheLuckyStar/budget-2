
<template>

    <form v-on:submit.prevent="onSubmit" class="form-horizontal">

        <fieldset>

            <legend>
                {{ account.id ? text.accounts.edit.title : text.accounts.create.title }}
                {{ account.name }}
            </legend>

            <div class="form-group">
                <label for="input-account-name" class="col-lg-2 col-md-3 col-sm-4 control-label">
                    {{ text.accounts.edit.name }}
                </label>
                <div class="col-lg-10 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="input-account-name" v-model="name" lazy>
                </div>
            </div>

            <div class="form-group">
                <label for="input-account-currency" class="col-lg-2 col-md-3 col-sm-4 control-label">
                    {{ text.accounts.edit.currency }}
                </label>
                <div class="col-lg-10 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="input-account-currency" v-model="currency" lazy>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2 text-right">
                    <button type="submit" class="btn btn-primary">
                        {{ text.app.submit }}
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

        data: function () {
            return {
                account: {},
                name: null,
                currency: null,
            }
        },

        route: {
            data: function (transition) {
                this.setData()
            },
        },

        watch: {
            accounts: function () {
                this.setData()
            },
        },

        methods: {
            setData: function () {
                this.account = this.$options.filters.find(this.accounts, 'id', this.$route.params.account_id)
                this.name = this.account.name
                this.currency = this.account.currency
            },
            onSubmit: function () {
                if (this.account.id) {
                    this.updateAccount(this.account.id, this)
                } else {
                    this.saveAccount(this)
                }
            },
        },

        vuex: {
            actions: {
                updateAccount: actions.updateAccount,
                saveAccount: actions.saveAccount,
            },
            getters: {
                accounts: getters.getAccounts,
                text: getters.getText,
            }
        }

    }

</script>
