
// Enable debugging
Vue.config.debug = true

// Format date to locale
Vue.filter('fullDate', function (date) {
    return moment(date).format('LL')
})