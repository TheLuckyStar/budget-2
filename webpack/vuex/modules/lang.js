
const state = {
    current: null,
    texts: {
        en: {
            app: {
                title: 'Budget',
                enable: 'Enable',
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
                    name: 'Name',
                    currency: 'Currency',
                },
                enable: {
                    title: 'Enable',
                },
                create: {
                    title: 'New account',
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
                enable: 'Activer',
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
                    name: 'Nom',
                    currency: 'Devise',
                },
                enable: {
                    title: 'Activer',
                },
                create: {
                    title: 'Nouveau compte',
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
