
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
    var languages = []

    for (var language in state.lang.texts) {
        if (state.lang.texts.hasOwnProperty(language)) {
            languages.push(language)
        }
    }

    return languages
}



/**
 * Remote store
 */

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
