
const state = {
    accounts: [],
}

const mutations = {
    SET_ACCOUNTS(state, accounts) {
        state.accounts = accounts
    },
}

module.exports = {
    state,
    mutations,
}
