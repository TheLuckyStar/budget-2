
<template>

    <div>

        <div class="col-lg-2 col-md-3 col-sm-4">
            <layout-sidebar :entries="entries"></layout-sidebar>
        </div>

        <div class="col-lg-10 col-md-9 col-sm-8">
            <router-view></router-view>
        </div>

    </div>

</template>



<script>

    var getters = require('vuex/getters.js')

    export default {

        computed: {

            entries: function () {
                return [
                    this.enabledAccountsMenu,
                    this.disabledAccountsMenu,
                    this.newAccountMenu
                ].filter(function(val) {
                    return val !== null;
                })
            },

            enabledAccountsMenu: function () {
                if (this.enabledAccounts.length === 0) {
                    return null
                }
                return {
                    title: this.text.accounts.enabled.title,
                    route: '/accounts/all',
                    entries: this.enabledAccounts.map(function (account) {
                        return {
                            text: account.name,
                            route: '/accounts/one/' + account.id,
                        }
                    }),
                }
            },

            disabledAccountsMenu: function () {
                if (this.disabledAccounts.length === 0) {
                    return null
                }
                return {
                    title: this.text.accounts.disabled.title,
                    entries: this.disabledAccounts.map(function (account) {
                        return {
                            text: account.name,
                            route: '/accounts/one/' + account.id,
                        }
                    }),
                }
            },

            newAccountMenu: function () {
                return {
                    title: this.text.accounts.new.title,
                    route: '/accounts/new',
                }
            },

        },

        vuex: {
            getters: {
                enabledAccounts: getters.getEnabledAccounts,
                disabledAccounts: getters.getDisabledAccounts,
                text: getters.getText,
            },
        },

    }
</script>
