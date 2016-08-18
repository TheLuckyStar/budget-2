
exports.state = {
    status: 0,
    language: null,
    currency_id: 1,
    account_id: null,
    envelope_id: null,
    developmentDate: moment(),
}

exports.mutations = {

    SET_STATUS(state, status) {
        state.status += status === 'processing' ? 1 : -1
    },

    SET_LANGUAGE(state, language) {
        state.language = language
    },

    SET_CURRENT_CURRENCY(state, currency_id) {
        state.currency_id = currency_id
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
