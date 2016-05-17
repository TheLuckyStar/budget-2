
/**
 * Lang store
 */

exports.getText = function (state) {
    return state.lang.texts[state.lang.current]
}

exports.getCurrentLanguage = function (state) {
    return state.lang.current
}

exports.getAvailableLanguages = function (state) {
    return Object.keys(state.lang.texts)
}



/**
 * Remote store : accounts
 */

exports.getAccounts = function (state) {
    return state.remote.accounts
}

exports.getEnabledAccounts = function (state) {
    return state.remote.accounts.filter(function (account) {
        return account.deleted_at === null;
    })
}

exports.getDisabledAccounts = function (state) {
    return state.remote.accounts.filter(function (account) {
        return account.deleted_at !== null;
    })
}
