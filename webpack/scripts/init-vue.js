
// Enable debugging
Vue.config.debug = true

// Implement filters
Vue.filter('find', function (data, field, value) {
    for (var i = 0; i < data.length; ++i) {
        if (data[i][field] == value) {
            return data[i]
        }
    }
    return {}
})
