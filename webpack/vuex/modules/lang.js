
const state = {
    current: null,
    texts: {
        en: {
            app: {
                title: 'Budget',
                submit: 'Save',
            },
            home: {
                page: {
                    title: 'Home',
                },
            },
            accounts: {
                page: {
                    title: 'Accounts',
                },
                report: {
                    section: {
                        title: 'Report',
                    },
                    balance: {
                        title: 'Balances',
                    },
                },
                edit: {
                    title: 'Edit',
                    fulltitle: 'Edit account',
                    name: 'Name',
                    currency: 'Currency',
                },
            },
            envelopes: {
                page: {
                    title: 'Envelopes',
                },
            },
            operations: {
                page: {
                    title: 'Operations',
                },
            },
        },
        fr: {
            app: {
                title: 'Budget',
                submit: 'Enregistrer',
            },
            home: {
                page: {
                    title: 'Accueil',
                },
            },
            accounts: {
                page: {
                    title: 'Comptes',
                },
                report: {
                    section: {
                        title: 'Analyser',
                    },
                    balance: {
                        title: 'Soldes',
                    },
                },
                edit: {
                    title: 'Modifier',
                    fulltitle: 'Modifier le compte',
                    name: 'Nom',
                    currency: 'Devise',
                },
            },
            envelopes: {
                page: {
                    title: 'Enveloppes',
                },
            },
            operations: {
                page: {
                    title: 'Opérations',
                },
            },
        },
    },
}

const mutations = {
    SET_LANGUAGE(state, language) {
        if (state.texts.hasOwnProperty(language) === false) {
            language = 'en'
        }
        state.current = language
    },
}

module.exports = {
    state,
    mutations,
}
