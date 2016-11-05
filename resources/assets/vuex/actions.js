
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
    exports.refreshAccounts({ dispatch, state })
    exports.refreshAccountDevelopment({ dispatch, state })
    exports.refreshEnvelopes({ dispatch, state })
    exports.refreshEnvelopeDevelopment({ dispatch, state })
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
    dispatch('SET_STATUS', 'processing')
    Vue.resource('currencies').get({ default_currency_id: state.app.currency_id }).then(function (response) {
        dispatch('SET_STATUS', 'done')
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
    dispatch('SET_ACCOUNTS', [])
    dispatch('SET_STATUS', 'processing')
    Vue.resource('accounts').get({ default_currency_id: state.app.currency_id }).then(function (response) {
        dispatch('SET_STATUS', 'done')
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
    dispatch('SET_STATUS', 'processing')
    Vue.resource('accounts').save({ default_currency_id: state.app.currency_id }, attributes).then(function (response) {
        dispatch('SET_STATUS', 'done')
        exports.refreshAccounts({ dispatch, state }, function() {
            location.hash = '#accounts/one/'+response.data.id
        })
    }, function (response) {
        console.log(response)
    })
}

exports.updateAccount = function ({ dispatch, state }, id, attributes) {
    dispatch('SET_STATUS', 'processing')
    Vue.resource('accounts/'+id).update({ default_currency_id: state.app.currency_id }, attributes).then(function (response) {
        dispatch('SET_STATUS', 'done')
        exports.refreshAccounts({ dispatch, state })
    }, function (response) {
        console.log(response)
    })
}

exports.refreshAccountDevelopment = function ({ dispatch, state }) {
    dispatch('SET_ACCOUNT_DEVELOPMENT', {})
    var attributes = {
        account_id: state.app.account_id,
        default_currency_id: state.app.currency_id,
    }
    var item = { date: state.app.developmentDate.format('YYYY-MM-DD') }
    dispatch('SET_STATUS', 'processing')
    Vue.resource('accounts/development{/account_id}').get(attributes, item).then(function (response) {
        dispatch('SET_STATUS', 'done')
        dispatch('SET_ACCOUNT_DEVELOPMENT', response.data)
    }, function (response) {
        console.log(response)
    })
}



/**
 * Remote store : envelopes
 */

exports.refreshEnvelopes = function ({ dispatch, state }, callback) {
    dispatch('SET_ENVELOPES', [])
    exports.refreshCurrencies({ dispatch, state })
    dispatch('SET_STATUS', 'processing')
    Vue.resource('envelopes').get({ default_currency_id: state.app.currency_id }).then(function (response) {
        dispatch('SET_STATUS', 'done')
        dispatch('SET_ENVELOPES', response.data)
        if (callback) {
            callback()
        }
    }, function (response) {
        console.log(response)
    })
}

exports.saveEnvelope = function ({ dispatch, state }, attributes) {
    dispatch('SET_STATUS', 'processing')
    Vue.resource('envelopes').save({ default_currency_id: state.app.currency_id }, attributes).then(function (response) {
        dispatch('SET_STATUS', 'done')
        exports.refreshEnvelopes({ dispatch, state }, function() {
            location.hash = '#envelopes/one/'+response.data.id
        })
    }, function (response) {
        console.log(response)
    })
}

exports.updateEnvelope = function ({ dispatch, state }, id, attributes) {
    dispatch('SET_STATUS', 'processing')
    Vue.resource('envelopes/'+id).update({ default_currency_id: state.app.currency_id }, attributes).then(function (response) {
        dispatch('SET_STATUS', 'done')
        exports.refreshEnvelopes({ dispatch, state })
    }, function (response) {
        console.log(response)
    })
}

exports.refreshEnvelopeDevelopment = function ({ dispatch, state }) {
    dispatch('SET_ENVELOPE_DEVELOPMENT', {})
    var attributes = {
        envelope_id: state.app.envelope_id,
        default_currency_id: state.app.currency_id,
    }
    var item = { date: state.app.developmentDate.format('YYYY-MM-DD') }
    dispatch('SET_STATUS', 'processing')
    Vue.resource('envelopes/development{/envelope_id}').get(attributes, item).then(function (response) {
        dispatch('SET_STATUS', 'done')
        dispatch('SET_ENVELOPE_DEVELOPMENT', response.data)
    }, function (response) {
        console.log(response)
    })
}



/**
 * Remote store : Operations
 */

exports.refreshOperations = function ({ dispatch, state }, callback) {
    dispatch('SET_OPERATIONS', [])
    dispatch('SET_STATUS', 'processing')
    Vue.resource('operations').get({ account_id: state.app.account_id, envelope_id: state.app.envelope_id, default_currency_id: state.app.currency_id }).then(function (response) {
        dispatch('SET_STATUS', 'done')
        dispatch('SET_OPERATIONS', response.data)
        if (callback) {
            callback()
        }
        exports.refreshCurrencies({ dispatch, state })
    }, function (response) {
        console.log(response)
    })
}

exports.setOperationFilters = function ({ dispatch, state }, accountId, envelopeId) {
    dispatch('SET_CURRENT_ACCOUNT', accountId)
    dispatch('SET_CURRENT_ENVELOPE', envelopeId)
    exports.refreshOperations({ dispatch, state })
}

exports.saveOperation = function ({ dispatch, state }, type, attributes) {
    dispatch('SET_STATUS', 'processing')
    Vue.resource('operations/'+type).save({ default_currency_id: state.app.currency_id }, attributes).then(function (response) {
        dispatch('SET_STATUS', 'done')
        exports.refreshOperations({ dispatch, state })
    }, function (response) {
        console.log(response)
    })
}

exports.updateOperation = function ({ dispatch, state }, id, type, attributes) {
    dispatch('SET_STATUS', 'processing')
    Vue.resource('operations/'+type+'/'+id).update({ default_currency_id: state.app.currency_id }, attributes).then(function (response) {
        dispatch('SET_STATUS', 'done')
        exports.refreshOperations({ dispatch, state })
    }, function (response) {
        console.log(response)
    })
}

exports.deleteOperation = function ({ dispatch, state }, id, type) {
    dispatch('SET_STATUS', 'processing')
    Vue.resource('operations/'+type+'/'+id).delete({ default_currency_id: state.app.currency_id }).then(function (response) {
        dispatch('SET_STATUS', 'done')
        exports.refreshOperations({ dispatch, state })
    }, function (response) {
        console.log(response)
    })
}
