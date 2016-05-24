
var getters = require('vuex/getters')



/**
 * Lang store
 */

exports.setLanguage = function ({ dispatch, state }, language) {
    language = language.substr(0, 2)

    if (getters.getAvailableLanguages(state).indexOf(language) === -1) {
        language = 'en'
    }

    store.dispatch('SET_LANGUAGE', language)
    document.title = getters.getText(state).app.title
    moment.locale(language)
}

exports.setCurrentAccount = function ({ dispatch, state }, account_id) {
    store.dispatch('SET_CURRENT_ACCOUNT', account_id)
}

exports.setCurrentEnvelope = function ({ dispatch, state }, envelope_id) {
    store.dispatch('SET_CURRENT_ENVELOPE', envelope_id)
}



/**
 * Remote store : accounts
 */

exports.refreshAccounts = function (store, callback) {
    Vue.resource('accounts').get().then(function (response) {
        store.dispatch('SET_ACCOUNTS', response.data)
        if (callback) {
            callback()
        }
    }, function (response) {
        console.log(response)
    })
}

exports.saveAccount = function (store, attributes) {
    Vue.resource('accounts').save({}, attributes).then(function (response) {
        exports.refreshAccounts(store, function() {
            location.hash = '#accounts/one/'+response.data.id
        })
    }, function (response) {
        console.log(response)
    })
}

exports.updateAccount = function (store, id, attributes) {
    Vue.resource('accounts/'+id).update({}, attributes).then(function (response) {
        exports.refreshAccounts(store)
    }, function (response) {
        console.log(response)
    })
}



/**
 * Remote store : envelopes
 */

exports.refreshEnvelopes = function (store, callback) {
    Vue.resource('envelopes').get().then(function (response) {
        store.dispatch('SET_ENVELOPES', response.data)
        if (callback) {
            callback()
        }
    }, function (response) {
        console.log(response)
    })
}

exports.saveEnvelope = function (store, attributes) {
    Vue.resource('envelopes').save({}, attributes).then(function (response) {
        exports.refreshEnvelopes(store, function() {
            location.hash = '#envelopes/one/'+response.data.id
        })
    }, function (response) {
        console.log(response)
    })
}

exports.updateEnvelope = function (store, id, attributes) {
    Vue.resource('envelopes/'+id).update({}, attributes).then(function (response) {
        exports.refreshEnvelopes(store)
    }, function (response) {
        console.log(response)
    })
}
