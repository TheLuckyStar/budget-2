
exports.state = {
    language: null,
    account_id: {},
    envelope_id: {},
}

exports.mutations = {

    SET_LANGUAGE(state, language) {
        state.language = language
    },

    SET_CURRENT_ACCOUNT(state, account_id) {
        state.account_id = account_id
    },

    SET_CURRENT_ENVELOPES(state, envelope_id) {
        state.envelope_id = envelope_id
        // getters.getEnvelopes().filter(function (envelope) { return envelope.id == account_id})[0]
    },

}
