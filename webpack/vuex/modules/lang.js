
const state = {
    current: 'en',
    texts: {
        en: {
            home: {
                title: 'Home',
            },
            accounts: {
                title: 'Accounts',
            },
            envelopes: {
                title: 'Envelopes',
            },
            operations: {
                title: 'Operations',
            },
        },
        fr: {
            home: {
                title: 'Accueil',
            },
            accounts: {
                title: 'Comptes',
            },
            envelopes: {
                title: 'Enveloppes',
            },
            operations: {
                title: 'Opérations',
            },
        },
    },
}

const mutations = {
    SET_LANGUAGE(state, language) {
        if (state.texts.hasOwnProperty(language)) {
            state.current = language
        }
    },
}

module.exports = {
    state,
    mutations,
}
