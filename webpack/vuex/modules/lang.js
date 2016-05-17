
exports.state = {
    current: null,
    texts: {
        en: {
            app: {
                title: 'Budget',
                enable: 'Enable',
                disable: 'Disable',
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
                enabled: {
                    title: 'Enabled accounts',
                },
                disabled: {
                    title: 'Disabled accounts',
                },
                new: {
                    title: 'New account',
                },
                form: {
                    title: 'Account details',
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
                enable: 'Activer',
                disable: 'Désactiver',
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
                enabled: {
                    title: 'Comptes activés',
                },
                disabled: {
                    title: 'Comptes désactivés',
                },
                new: {
                    title: 'Nouveau compte',
                },
                form: {
                    title: 'Informations du compte',
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

exports.mutations = {
    SET_LANGUAGE(state, language) {
        if (state.texts.hasOwnProperty(language) === false) {
            language = 'en'
        }
        state.current = language
    },
}
