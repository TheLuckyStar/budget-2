
<template>

    <div class="row">

        <div class="col-md-12">

            <div class="pull-right">
                <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#account-form">
                    {{ text.accounts.form.title }}
                </button>
                <div class="modal fade" id="account-form" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title">
                                    {{ text.accounts.form.title }}
                                </h4>
                            </div>
                            <div class="modal-body">
                                <accounts-form :account="account"></accounts-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1>
                {{ account.name }}
            </h1>

            <hr>

        </div>

        <div class="col-md-12" v-if="account.currency && account.currency_id != currentCurrency.id">
            <div class="alert alert-warning clearfix">
                <a href="#" v-on:click.prevent="setCurrentCurrency(account.currency_id)" class="btn btn-default pull-right">
                    {{{ text.accounts.page.currencyLink }}}
                </a>
                {{{
                    text.accounts.page.currencyWarning
                        .replace(':active', currentCurrency.name)
                        .replace(':account', account.currency.name)
                }}}
            </div>
        </div>

        <div class="col-md-6" v-if="account.state">
            <layout-card :color="balanceColor"
                :icon="balanceIcon"
                :title="text.accounts.balance.title"
                :text="account.state.balance"
                :comment="$options.filters.formatLongDate(date)"
            ></layout-card>
        </div>

        <div class="col-md-12">
            <accounts-development></accounts-development>
        </div>

    </div>

</template>



<script>

    var mixins = require('scripts/mixins.js')
    var AccountsDevelopment = require('components/accounts/development.vue')
    var AccountsForm = require('components/accounts/form.vue')

    export default {

        mixins: [mixins.vuex],

        data: function () {
            return {
                date: moment(),
            }
        },

        computed: {

            balanceColor: function () {
                if (this.account.balance > 0) {
                    return 'success'
                }

                if (this.account.balance < 0) {
                    return 'danger'
                }

                return 'primary'
            },

            balanceIcon: function () {
                if (this.account.balance > 0) {
                    return 'fa-thumbs-up'
                }

                if (this.account.balance < 0) {
                    return 'fa-thumbs-down'
                }

                return 'fa-balance-scale'
            },

        },

        route: {
            data: function () {
                this.$emit('refresh-data')
            },
        },

        watch: {
            language: function() {
                this.date = moment.unix(this.date.unix())
            },
        },

        events: {
            'refresh-data': function () {
                this.setCurrentAccount(this.$route.params.account_id)
                return true
            },
        },

        components: {
            AccountsDevelopment,
            AccountsForm,
        },

    }

</script>



<style scoped>

    .alert-warning .btn {
        margin-left: 15px;
    }

</style>