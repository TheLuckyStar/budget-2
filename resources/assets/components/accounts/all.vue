
<template>

    <div>

        <h1>
            {{ text.accounts.enabled.title }}
        </h1>

        <hr>

        <div class="col-md-6">
            <layout-card :color="enabledAccountsBalance < 0 ? 'danger' : 'success'"
                :icon="enabledAccountsBalance < 0 ? 'fa-thumbs-down' : 'fa-thumbs-up'"
                :title="text.accounts.balance.title"
                :text="enabledAccountsBalance"
                :comment="$options.filters.formatLongDate(date)"
            ></layout-card>
        </div>

        <div class="col-md-12">
            <layout-chart type="pie" :title="text.accounts.balances.title" :chart-labels="balancesLabels" :data="balancesData" :data-labels="text.accounts.balances.labels"></layout-chart>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')

    export default {

        mixins: [mixins.vuex],

        computed: {
            balancesData: function () {
                return [
                    {
                        data: this.enabledAccounts.map(function (account) {
                            return account.balance
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

    }

</script>
