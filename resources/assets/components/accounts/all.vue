
<template>

    <div class="row">

        <div class="col-md-12">
            <h1>
                {{ text.accounts.enabled.title }}
            </h1>

            <hr>

        </div>

        <div class="col-md-6">
            <layout-card :color="enabledAccountsBalance < 0 ? 'danger' : 'success'"
                :icon="enabledAccountsBalance < 0 ? 'fa-thumbs-down' : 'fa-thumbs-up'"
                :title="text.accounts.balance.title"
                :text="enabledAccountsBalance"
                :comment="$options.filters.formatLongDate(date)"
            ></layout-card>
        </div>

        <div class="col-md-6" v-if="accountDevelopment.state">
            <layout-card :color="accountDevelopment.state.accumulated_savings < 0 ? 'danger' : 'success'"
                :icon="accountDevelopment.state.accumulated_savings < 0 ? 'fa-thumbs-down' : 'fa-thumbs-up'"
                :title="text.accounts.accumulatedSavings.title"
                :text="accountDevelopment.state.accumulated_savings"
                :comment="$options.filters.formatLongDate(date)"
            ></layout-card>
        </div>

        <div class="col-md-12">
            <layout-chart type="pie"
                :legend="text.accounts.balances.title"
                :labels="balancesLabels"
                :datasets="balancesData"></layout-chart>
        </div>

        <div class="col-md-12">
            <accounts-development></accounts-development>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var AccountsDevelopment = require('components/accounts/development.vue')

    export default {

        mixins: [mixins.vuex],

        computed: {

            balancesData: function () {
                return [
                    {
                        type: 'pie',
                        data: this.enabledAccounts.map(function (account) {
                            return account.state.balance
                        }),
                    },
                ]
            },

            balancesLabels: function () {
                return this.enabledAccounts.map(function (account) {
                    return account.name
                })
            },

        },

        route: {
            data: function () {
                this.setCurrentAccount(null)
            },
        },

        components: {
            AccountsDevelopment,
        },

    }

</script>
