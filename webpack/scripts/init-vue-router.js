
var App = require('components/App.vue')

// Register router
Vue.use(VueRouter)

// Create instance
var router = new VueRouter({
    hashbang: false,
})

// Map routes
router.map({
    '/home': {
        component: { template: '<div>Home</div>' },
    },
    '/accounts': {
        component: require('components/accounts/index.vue'),
        subRoutes: {
            '/report/balance': {
                component: require('components/accounts/report/balance.vue'),
            },
            '/edit/:account_id': {
                component: require('components/accounts/edit.vue'),
            },
            '/enable/:account_id': {
                component: require('components/accounts/enable.vue'),
            },
            '/create': {
                component: require('components/accounts/edit.vue'),
            },
        },
    },
})

router.redirect({
  '*': '/',
  '/': '/home',
  '/accounts': '/accounts/report',
  '/accounts/report': '/accounts/report/balance',
})

// Start application
router.start(App, 'app')
