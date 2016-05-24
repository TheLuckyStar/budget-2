
exports.state = {
    accounts: [],
    envelopes: [],
}

exports.mutations = {

    SET_ACCOUNTS(state, accounts) {
        state.accounts = accounts
    },

    SET_ENVELOPES(state, envelopes) {
        state.envelopes = envelopes
    },

}
