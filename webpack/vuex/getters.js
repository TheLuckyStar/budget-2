
exports.getText = function (state) {
    return state.texts[state.lang.current]
}

exports.getLanguage = function (state) {
    return state.lang.current
}
