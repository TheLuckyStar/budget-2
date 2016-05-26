
exports.state = {
    language: null,
    account_id: {},
    envelope_id: {},
    developmentDate: moment(),
}

exports.mutations = {

    SET_LANGUAGE(state, language) {
        state.language = language
    },

    SET_CURRENT_ACCOUNT(state, account_id) {
        state.account_id = account_id
    },

    SET_CURRENT_ENVELOPE(state, envelope_id) {
        state.envelope_id = envelope_id
    },

    SET_DEVELOPMENT_DATE(state, developmentDate) {
        state.developmentDate = developmentDate
    },

}
