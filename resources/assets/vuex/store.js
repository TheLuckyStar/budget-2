
var app = require('vuex/modules/app.js')
var lang = require('vuex/modules/lang.js')
var remote = require('vuex/modules/remote.js')

store = new Vuex.Store({
    modules: {
        app,
        lang,
        remote,
    },
    strict: true,
})

module.exports = store
