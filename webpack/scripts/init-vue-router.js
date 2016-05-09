
var App = require('components/App.vue')

// Register router
Vue.use(VueRouter)

// Set options

// Create instance
var router = new VueRouter({
    hashbang: false,
})

// Map routes
router.map({
    '/accounts': {
        component: require('components/accounts/index.vue'),
        subRoutes: {
            '/balance': {
                component: require('components/accounts/balance.vue'),
            },
            '/edit/:id': {
                component: require('components/accounts/edit.vue'),
            },
        },
    },
})

// Start application
router.start(App, 'app')
