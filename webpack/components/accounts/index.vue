
<template>

    <div class="row">

        <div class="col-md-3 col-sm-4">
            <layout-sidebar :entries="entries"></layout-sidebar>
        </div>

        <div class="col-md-9 col-sm-8">
            <router-view></router-view>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        computed: {

            entries: function () {
                return [
                    this.enabledAccountsMenu,
                    this.disabledAccountsMenu,
                    this.newAccountMenu
                ].filter(function(val) {
                    return val !== null
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
                            title: account.name,
                            route: '/accounts/one/' + account.id,
                            badge: account.currency,
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
                            title: account.name,
                            route: '/accounts/one/' + account.id,
                            badge: account.currency,
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

        created: function () {
            this.refreshAccounts()
        },

    }

</script>
