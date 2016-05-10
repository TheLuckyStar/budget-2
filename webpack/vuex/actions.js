
exports.setLanguage = function (dispatch, language) {
    dispatch.dispatch('SET_LANGUAGE', language.substr(0, 2))
}

exports.refreshAccounts = function (dispatch, language) {
    Vue.resource('accounts').get().then(function (response) {
        dispatch.dispatch('SET_ACCOUNTS', response.data)
    }, function (response) {
        console.log(response)
    });
}
