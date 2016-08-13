
exports.state = {
    currencies: [],
    accounts: [],
    accountDevelopment: {},
    envelopes: [],
    envelopeDevelopment: {},
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

}
