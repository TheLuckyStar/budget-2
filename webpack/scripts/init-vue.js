
// Enable debugging
Vue.config.debug = true

// Format date to localized date, month and year
Vue.filter('fullDate', function (date) {
    return moment(date).format('LL')
})

// Format date to localized month and year
Vue.filter('fullMonth', function (date) {
    var date = moment(date)
    var month = moment.localeData().months(date)
    month = month.charAt(0).toUpperCase() + month.slice(1)
    var year = date.year()
    return month + ' ' + year
})
