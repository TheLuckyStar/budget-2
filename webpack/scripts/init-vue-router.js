
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
            '/all': {
                component: require('components/accounts/all.vue'),
            },
            '/one/:account_id': {
                component: require('components/accounts/one.vue'),
            },
            '/new': {
                component: require('components/accounts/new.vue'),
            },
        },
    },
    '/envelopes': {
        component: require('components/envelopes/index.vue'),
        subRoutes: {
            '/all': {
                component: require('components/envelopes/all.vue'),
            },
            '/one/:envelope_id': {
                component: require('components/envelopes/one.vue'),
            },
            '/new': {
                component: require('components/envelopes/new.vue'),
            },
        },
    },
})

router.redirect({
  '*': '/',
  '/': '/home',
  '/accounts': '/accounts/all',
  '/envelopes': '/envelopes/all',
})

// Start application
router.start(App, 'app')
