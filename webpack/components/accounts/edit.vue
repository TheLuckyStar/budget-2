
<template>

    <form class="form-horizontal">

        <fieldset>

            <legend>
                {{ $route.params.account_id ? text.accounts.edit.title : text.accounts.create.title }}
                {{ account.name }}
            </legend>

            <div class="form-group">
                <label for="input-account-name" class="col-lg-2 col-md-3 col-sm-4 control-label">
                    {{ text.accounts.edit.name }}
                </label>
                <div class="col-lg-10 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="input-account-name" v-model="account.name">
                </div>
            </div>

            <div class="form-group">
                <label for="input-account-currency" class="col-lg-2 col-md-3 col-sm-4 control-label">
                    {{ text.accounts.edit.currency }}
                </label>
                <div class="col-lg-10 col-md-9 col-sm-8">
                    <input type="text" class="form-control" id="input-account-currency" v-model="account.currency">
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

    var getters = require('vuex/getters.js')

    export default {

        data: function () {
            return {
                new_account: {},
            }
        },

        computed: {
            account: function () {
                if (this.$route.params.account_id === undefined) {
                    return this.new_account
                }
                return this.$options.filters.find(this.accounts, 'id', this.$route.params.account_id)
            },
        },

        vuex: {
            getters: {
                accounts: getters.getAccounts,
                text: getters.getText,
            }
        }

    }

</script>
