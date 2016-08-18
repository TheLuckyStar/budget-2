
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
                        var currency = this.currencies.filter(function (currency) { return account.currency_id == currency.id })[0]
                        return {
                            title: account.name,
                            route: '/accounts/one/' + account.id,
                            badge: currency ? currency.name : null,
                        }
                    }, this),
                }
            },

            disabledAccountsMenu: function () {
                if (this.disabledAccounts.length === 0) {
                    return null
                }
                return {
                    title: this.text.accounts.disabled.title,
                    entries: this.disabledAccounts.map(function (account) {
                        var currency = this.currencies.filter(function (currency) { return account.currency_id == currency.id })[0]
                        return {
                            title: account.name,
                            route: '/accounts/one/' + account.id,
                            badge: currency ? currency.name : null,
                        }
                    }, this),
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
            this.$emit('refresh-data')
        },

        events: {
            'refresh-data': function () {
                this.refreshAccounts()
                return true
            },
        },

    }

</script>
