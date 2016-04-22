
exports.setLanguage = function (dispatch, language) {
    dispatch.dispatch('SET_LANGUAGE', language.substr(0, 2))
}
