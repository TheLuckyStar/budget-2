
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
            setDevelopementDate: actions.setDevelopementDate,
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

            var start = moment(date).startOf('month')
            var end = moment(start).endOf('month')

            while (start.isSameOrBefore(end)) {
                list.push(this.$options.filters.formatLongDay(start))
                start.add(1, 'day')
            }

            return list
        },

    },

}