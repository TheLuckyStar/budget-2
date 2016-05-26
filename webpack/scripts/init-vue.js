
// Enable debugging
Vue.config.debug = true

// Format date to localized date, month and year
Vue.filter('formatLongDate', function (date) {
    return moment(date).format('LL')
})

// Format date to localized day and date
Vue.filter('formatLongDay', function (date) {
    var date = moment(date)
    var day = moment.localeData().weekdays(date)
    day = day.charAt(0).toUpperCase() + day.slice(1)
    var date = date.date()
    return day + ' ' + date
})

// Format date to localized month and year
Vue.filter('formatLongMonth', function (date) {
    var date = moment(date)
    var month = moment.localeData().months(date)
    month = month.charAt(0).toUpperCase() + month.slice(1)
    var year = date.year()
    return month + ' ' + year
})
