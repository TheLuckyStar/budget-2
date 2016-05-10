
var lang = require('vuex/modules/lang.js')
var remote = require('vuex/modules/remote.js')

store = new Vuex.Store({
    modules: {
        lang,
        remote,
    },
    strict: true,
})

store.watch('lang.current', function (option) {
    document.title = lang.state.texts[option].app.title
})

module.exports = store
