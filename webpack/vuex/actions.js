
actions = {

    setLanguage: function (dispatch, language) {
        dispatch.dispatch('SET_LANGUAGE', language.substr(0, 2))
    },

    refreshAccounts: function (dispatch, callback) {
        Vue.resource('accounts').get().then(function (response) {
            dispatch.dispatch('SET_ACCOUNTS', response.data)
            if (callback) {
                callback()
            }
        }, function (response) {
            console.log(response)
        });
    },

    saveAccount: function (dispatch, data) {
        var attributes = {
            name: data.name,
            currency: data.currency,
        }
        Vue.resource('accounts').save({}, attributes).then(function (response) {
            actions.refreshAccounts(dispatch, function() {
                location.hash = '#accounts/edit/'+response.data.id;
            })
        }, function (response) {
            console.log(response)
        });
    },

    updateAccount: function (dispatch, id, data) {
        var attributes = {
            name: data.name,
            currency: data.currency,
        }
        Vue.resource('accounts/'+id).update({}, attributes).then(function (response) {
            actions.refreshAccounts(dispatch)
        }, function (response) {
            console.log(response)
        });
    },

}

module.exports = actions
