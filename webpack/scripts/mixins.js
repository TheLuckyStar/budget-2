
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
            language: getters.getCurrentLanguage,
            text: getters.getText,
            account: getters.getCurrentAccount,
            accounts: getters.getAllAccounts,
            enabledAccounts: getters.getEnabledAccounts,
            disabledAccounts: getters.getDisabledAccounts,
            accountDevelopment: getters.getAccountDevelopment,
            envelope: getters.getCurrentEnvelope,
            envelopes: getters.getAllEnvelopes,
            enabledEnvelopes: getters.getEnabledEnvelopes,
            disabledEnvelopes: getters.getDisabledEnvelopes,
            developmentDate: getters.getDevelopmentDate,
        },

    },

}

exports.moment = {

    methods: {

        listDaysInMonth: function (date) {
            list = []

            for (date.startOf('month'); date.month() === moment(date).add(1, 'day').month(); date.add(1, 'day')) {
                list.push(this.$options.filters.fullDate(date))
            }

            return list
        },

    },

}