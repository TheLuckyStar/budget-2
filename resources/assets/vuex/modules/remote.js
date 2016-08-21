
exports.state = {
    currencies: [],
    accounts: [],
    accountDevelopment: {},
    envelopes: [],
    envelopeDevelopment: {},
    operations: [],
}

exports.mutations = {

    SET_CURRENCIES(state, currencies) {
        state.currencies = Vue.options.filters.orderBy(currencies, 'name')
    },

    SET_ACCOUNTS(state, accounts) {
        state.accounts = Vue.options.filters.orderBy(accounts, 'name')
    },

    SET_ACCOUNT_DEVELOPMENT(state, development) {
        state.accountDevelopment = development
    },

    SET_ENVELOPES(state, envelopes) {
        state.envelopes = Vue.options.filters.orderBy(envelopes, 'name')
    },

    SET_ENVELOPE_DEVELOPMENT(state, development) {
        state.envelopeDevelopment = development
    },

    SET_OPERATIONS(state, operations) {
        state.operations = operations.map(function (operation) {
            operation.created_at = moment(operation.created_at)
            operation.date = moment(operation.date)
            return operation
        }).sort(function (a, b) {
            if (a.date.isSame(b.date, 'day')) {
                return a.created_at.isBefore(b.created_at, 'day') ? 1 : -1
            }
            return a.date.isBefore(b.date, 'day') ? 1 : -1
        })
    },

}
