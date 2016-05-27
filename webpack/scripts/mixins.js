
var actions = require('vuex/actions.js')
var getters = require('vuex/getters.js')

exports.vuex = {

    vuex: {

        actions: {
            setLanguage: actions.setLanguage,
            refreshAccounts: actions.refreshAccounts,
            setCurrentAccount: actions.setCurrentAccount,
            saveAccount: actions.saveAccount,
            updateAccount: actions.updateAccount,
            setCurrentEnvelope: actions.setCurrentEnvelope,
            refreshEnvelopes: actions.refreshEnvelopes,
            saveEnvelope: actions.saveEnvelope,
            updateEnvelope: actions.updateEnvelope,
            setDevelopmentDate: actions.setDevelopmentDate,
        },

        getters: {
            language: getters.getCurrentLanguage,
            availableLanguages: getters.getAvailableLanguages,
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
            envelopeDevelopment: getters.getEnvelopeDevelopment,
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

        listMonthsInYear: function (date) {
            list = []

            var start = moment(date).startOf('year')
            var end = moment(start).endOf('year')

            while (start.isSameOrBefore(end)) {
                list.push(this.$options.filters.formatLongMonth(start))
                start.add(1, 'month')
            }

            return list
        },

    },

}

exports.development = {

    computed: {

        prevMonth: function () {
            return moment(this.developmentDate).subtract(1, 'month')
        },

        nextMonth: function () {
            return moment(this.developmentDate).add(1, 'month')
        },

        prevYear: function () {
            return moment(this.developmentDate).subtract(1, 'year')
        },

        nextYear: function () {
            return moment(this.developmentDate).add(1, 'year')
        },

    },
}
