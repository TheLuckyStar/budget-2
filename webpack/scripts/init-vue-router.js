
var App = require('components/App.vue')

// Register router
Vue.use(VueRouter)

// Set options

// Create instance
var router = new VueRouter({
    hashbang: false,
})

// Map routes
router.map({})

// Start application
router.start(App, 'app')
