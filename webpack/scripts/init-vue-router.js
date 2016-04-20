
var App = require('components/App.vue')

// Register router
Vue.use(VueRouter)

// Set options
VueRouter.hashbang = false

// Create instance
var router = new VueRouter()

// Map routes
router.map({})

// Start application
router.start(App, 'app')
