
<template>

    <form v-on:submit.prevent="onSubmit" class="form-horizontal">

        <fieldset>

            <legend>
                {{ text.accounts.form.title }}
            </legend>

            <div class="form-group">
                <label for="input-account-name" class="col-xs-3 control-label">
                    {{ text.accounts.form.name }}
                </label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="input-account-name" v-model="name" lazy :disabled="account.deleted_at !== null">
                </div>
            </div>

            <div class="form-group">
                <label for="input-account-currency" class="col-xs-3 control-label">
                    {{ text.accounts.form.currency }}
                </label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="input-account-currency" v-model="currency" lazy :disabled="account.deleted_at !== null">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 text-right">
                    <button v-if="account.deleted_at !== null"
                        @click="onEnable"
                        type="button"
                        class="btn btn-success">
                        {{ text.app.enable }}
                    </button>
                    <button v-if="account.deleted_at === null && account.id"
                        @click="onDisable"
                        type="button"
                        class="btn btn-warning">
                        {{ text.app.disable }}
                    </button>
                    <button v-if="account.deleted_at === null"
                        type="submit"
                        class="btn btn-primary">
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

        props: ['account'],

        data: function () {
            return {
                name: null,
                currency: null,
            }
        },

        watch: {
            account: function () {
                this.name = this.account.name
                this.currency = this.account.currency
            },
        },

        methods: {
            onSubmit: function () {
                var attributes = {
                    name: this.name,
                    currency: this.currency,
                }
                if (this.account.id) {
                    this.updateAccount(this.account.id, attributes)
                } else {
                    this.saveAccount(attributes)
                }
            },
            onEnable: function () {
                var attributes = {
                    deleted_at: null
                }
                this.updateAccount(this.account.id, attributes)
            },
            onDisable: function () {
                var attributes = {
                    deleted_at: moment().format("YYYY-MM-DD HH:mm:ss"),
                }
                this.updateAccount(this.account.id, attributes)
            },
        },

        vuex: {
            actions: {
                updateAccount: actions.updateAccount,
                saveAccount: actions.saveAccount,
            },
            getters: {
                text: getters.getText,
            },
        },

    }

</script>
