
const state = {
    count: 0,
}

const mutations = {
    INCREMENT (state, amount) {
        state.count = state.count + amount
    },
}

module.exports = new Vuex.Store({
    state,
    mutations,
})
