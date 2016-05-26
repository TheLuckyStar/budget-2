
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
}

exports.mutations = {

    SET_ACCOUNTS(state, accounts) {
        state.accounts = accounts
    },

    SET_ACCOUNT_DEVELOPMENT(state, development) {
        state.accountDevelopment = development
    },

    SET_ENVELOPES(state, envelopes) {
        state.envelopes = envelopes
    },

}
