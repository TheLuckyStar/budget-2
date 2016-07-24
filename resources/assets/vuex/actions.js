
/**
 * Lang store
 */

exports.setLanguage = function ({ dispatch, state }, language) {
    language = language.substr(0, 2)

    if (Object.keys(state.lang).indexOf(language) === -1) {
        language = 'en'
    }

    moment.locale(language)
    dispatch('SET_LANGUAGE', language)
    dispatch('SET_DEVELOPMENT_DATE', moment(state.app.developmentDate.toDate()))
    document.title = state.lang[language].app.title
}

exports.setCurrentCurrency = function ({ dispatch, state }, currency_id) {
    dispatch('SET_CURRENT_CURRENCY', currency_id)
}

exports.setCurrentAccount = function ({ dispatch, state }, account_id) {
    dispatch('SET_CURRENT_ACCOUNT', account_id)
    exports.refreshAccountDevelopment({ dispatch, state })
}

exports.setCurrentEnvelope = function ({ dispatch, state }, envelope_id) {
    dispatch('SET_CURRENT_ENVELOPE', envelope_id)
    exports.refreshEnvelopeDevelopment({ dispatch, state })
}

exports.setDevelopmentDate = function ({ dispatch, state }, developmentDate) {
    dispatch('SET_DEVELOPMENT_DATE', moment(developmentDate))
    exports.refreshAccountDevelopment({ dispatch, state })
    exports.refreshEnvelopeDevelopment({ dispatch, state })
}



/**
 * Remote store : currencies
 */

exports.refreshCurrencies = function ({ dispatch, state }, callback) {
    Vue.resource('currencies').get().then(function (response) {
        dispatch('SET_CURRENCIES', response.data)
        if (callback) {
            callback()
        }
    }, function (response) {
        console.log(response)
    })
}



/**
 * Remote store : accounts
 */

exports.refreshAccounts = function ({ dispatch, state }, callback) {
    Vue.resource('accounts').get().then(function (response) {
        dispatch('SET_ACCOUNTS', response.data)
        if (callback) {
            callback()
        }
        exports.refreshCurrencies({ dispatch, state })
    }, function (response) {
        console.log(response)
    })
}

exports.saveAccount = function ({ dispatch, state }, attributes) {
    Vue.resource('accounts').save({}, attributes).then(function (response) {
        exports.refreshAccounts({ dispatch, state }, function() {
            location.hash = '#accounts/one/'+response.data.id
        })
    }, function (response) {
        console.log(response)
    })
}

exports.updateAccount = function ({ dispatch, state }, id, attributes) {
    Vue.resource('accounts/'+id).update({}, attributes).then(function (response) {
        exports.refreshAccounts({ dispatch, state })
    }, function (response) {
        console.log(response)
    })
}

exports.refreshAccountDevelopment = function ({ dispatch, state }) {
    if (state.app.account_id === null) {
        return
    }
    var attributes = { account_id: state.app.account_id }
    var item = { date: state.app.developmentDate.format('YYYY-MM-DD') }
    Vue.resource('accounts/development{/account_id}').get(attributes, item).then(function (response) {
        dispatch('SET_ACCOUNT_DEVELOPMENT', response.data)
    }, function (response) {
        console.log(response)
    })
}



/**
 * Remote store : envelopes
 */

exports.refreshEnvelopes = function ({ dispatch, state }, callback) {
    exports.refreshCurrencies({ dispatch, state })
    Vue.resource('envelopes').get().then(function (response) {
        dispatch('SET_ENVELOPES', response.data)
        if (callback) {
            callback()
        }
    }, function (response) {
        console.log(response)
    })
}

exports.saveEnvelope = function ({ dispatch, state }, attributes) {
    Vue.resource('envelopes').save({}, attributes).then(function (response) {
        exports.refreshEnvelopes({ dispatch, state }, function() {
            location.hash = '#envelopes/one/'+response.data.id
        })
    }, function (response) {
        console.log(response)
    })
}

exports.updateEnvelope = function ({ dispatch, state }, id, attributes) {
    Vue.resource('envelopes/'+id).update({}, attributes).then(function (response) {
        exports.refreshEnvelopes({ dispatch, state })
    }, function (response) {
        console.log(response)
    })
}

exports.refreshEnvelopeDevelopment = function ({ dispatch, state }) {
    if (state.app.envelope_id === null) {
        return
    }
    var attributes = { envelope_id: state.app.envelope_id }
    var item = { date: state.app.developmentDate.format('YYYY-MM-DD') }
    Vue.resource('envelopes/development{/envelope_id}').get(attributes, item).then(function (response) {
        dispatch('SET_ENVELOPE_DEVELOPMENT', response.data)
    }, function (response) {
        console.log(response)
    })
}
