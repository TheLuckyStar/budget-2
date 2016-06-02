
/**
 * App store
 */

exports.getCurrentLanguage = function (state) {
    return state.app.language
}

exports.getCurrentAccount = function (state) {
    var accounts = state.remote.accounts.filter(function (account) {
        return account.id == state.app.account_id
    })
    if (accounts.length === 0) {
        return {}
    }
    return accounts[0]
}

exports.getCurrentEnvelope = function (state) {
    var envelopes = state.remote.envelopes.filter(function (envelope) {
        return envelope.id == state.app.envelope_id
    })
    if (envelopes.length === 0) {
        return {}
    }
    return envelopes[0]
}

exports.getDevelopmentDate = function (state) {
    return state.app.developmentDate
}



/**
 * Lang store
 */

exports.getText = function (state) {
    return state.lang[state.app.language]
}

exports.getAvailableLanguages = function (state) {
    return Object.keys(state.lang)
}



/**
 * Remote store : accounts
 */

exports.getAllAccounts = function (state) {
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

exports.getAccountDevelopment = function (state) {
    return state.remote.accountDevelopment
}



/**
 * Remote store : envelopes
 */

exports.getAllEnvelopes = function (state) {
    return state.remote.envelopes
}

exports.getEnabledEnvelopes = function (state) {
    return state.remote.envelopes.filter(function (envelope) {
        return envelope.deleted_at === null;
    })
}

exports.getDisabledEnvelopes = function (state) {
    return state.remote.envelopes.filter(function (envelope) {
        return envelope.deleted_at !== null;
    })
}

exports.getEnvelopeDevelopment = function (state) {
    return state.remote.envelopeDevelopment
}

exports.getEnabledEnvelopesBalance = function (state) {
    var balance = 0

    exports.getEnabledEnvelopes(state).forEach(function (envelope) {
        balance += envelope.balance
    })

    return balance
}
