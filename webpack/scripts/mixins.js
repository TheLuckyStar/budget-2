
var actions = require('vuex/actions.js')
var getters = require('vuex/getters.js')

exports.vuex = {

    vuex: {

        actions: {
            refreshAccounts: actions.refreshAccounts,
            setCurrentAccount: actions.setCurrentAccount,
            saveAccount: actions.saveAccount,
            updateAccount: actions.updateAccount,
            setCurrentEnvelope: actions.setCurrentEnvelope,
            refreshEnvelopes: actions.refreshEnvelopes,
            saveEnvelope: actions.saveEnvelope,
            updateEnvelope: actions.updateEnvelope,
        },

        getters: {
            text: getters.getText,
            account: getters.getCurrentAccount,
            accounts: getters.getAllAccounts,
            enabledAccounts: getters.getEnabledAccounts,
            disabledAccounts: getters.getDisabledAccounts,
            envelope: getters.getCurrentEnvelope,
            envelopes: getters.getAllEnvelopes,
            enabledEnvelopes: getters.getEnabledEnvelopes,
            disabledEnvelopes: getters.getDisabledEnvelopes,
        },

    },

}
