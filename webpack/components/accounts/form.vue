
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
                    <input type="text" class="form-control" id="input-account-name" v-model="name" lazy :disabled="deleted_at">
                </div>
            </div>

            <div class="form-group">
                <label for="input-account-currency" class="col-xs-3 control-label">
                    {{ text.accounts.form.currency }}
                </label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" id="input-account-currency" v-model="currency" lazy :disabled="deleted_at">
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 text-right">
                    <button v-if="deleted_at && id"
                        @click="onEnable"
                        type="button"
                        class="btn btn-success btn-sm">
                        {{ text.app.enable }}
                    </button>
                    <button v-if="! deleted_at && id"
                        @click="onDisable"
                        type="button"
                        class="btn btn-warning btn-sm">
                        {{ text.app.disable }}
                    </button>
                    <button v-if="! deleted_at"
                        type="submit"
                        class="btn btn-primary btn-sm">
                        {{ text.app.submit }}
                    </button>
                </div>
            </div>

        </fieldset>

    </form>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        data: function () {
            return {
                id: null,
                name: null,
                currency: null,
                deleted_at: null,
            }
        },

        watch: {
            account: function () {
                this.id = this.account.id
                this.name = this.account.name
                this.currency = this.account.currency
                this.deleted_at = this.account.deleted_at
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

    }

</script>
