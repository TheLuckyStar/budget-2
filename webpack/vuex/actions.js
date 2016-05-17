
/**
 * Lang store
 */

exports.setLanguage = function (dispatch, language) {
    dispatch.dispatch('SET_LANGUAGE', language.substr(0, 2))
}



/**
 * Remote store : accounts
 */

exports.refreshAccounts = function (dispatch, callback) {
    Vue.resource('accounts').get().then(function (response) {
        dispatch.dispatch('SET_ACCOUNTS', response.data)
        if (callback) {
            callback()
        }
    }, function (response) {
        console.log(response)
    })
}

exports.saveAccount = function (dispatch, attributes) {
    Vue.resource('accounts').save({}, attributes).then(function (response) {
        exports.refreshAccounts(dispatch, function() {
            location.hash = '#accounts/one/'+response.data.id
        })
    }, function (response) {
        console.log(response)
    })
}

exports.updateAccount = function (dispatch, id, attributes) {
    Vue.resource('accounts/'+id).update({}, attributes).then(function (response) {
        exports.refreshAccounts(dispatch)
    }, function (response) {
        console.log(response)
    })
}
