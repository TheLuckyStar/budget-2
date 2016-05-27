
exports.state = {
    accounts: [],
    accountDevelopment: {
        monthly: {
            balance: [],
            revenues: [],
            outcomes: [],
            incomingTransfers: [],
            outgoingTransfers: [],
        },
        yearly: {
            balance: [],
            revenues: [],
            outcomes: [],
            incomingTransfers: [],
            outgoingTransfers: [],
        },
    },
    envelopes: [],
    envelopeDevelopment: {
        monthly: {
            balance: [],
            incomes: [],
            outcomes: [],
        },
        yearly: {
            balance: [],
            incomes: [],
            outcomes: [],
        },
    },
}

exports.mutations = {

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
