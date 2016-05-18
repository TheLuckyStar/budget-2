
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
                    title: 'Details',
                    name: 'Name',
                    currency: 'Currency',
                },
                situation: {
                    title: 'Situation',
                },
            },
            envelopes: {
                page: {
                    title: 'Envelopes',
                },
                enabled: {
                    title: 'Enabled envelopes',
                },
                disabled: {
                    title: 'Disabled envelopes',
                },
                new: {
                    title: 'New envelope',
                },
                form: {
                    title: 'Details',
                    name: 'Name',
                    icon: 'Icon',
                },
                situation: {
                    title: 'Situation',
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
                    title: 'Informations',
                    name: 'Nom',
                    currency: 'Devise',
                },
                situation: {
                    title: 'Situation',
                },
            },
            envelopes: {
                page: {
                    title: 'Enveloppes',
                },
                enabled: {
                    title: 'Enveloppes activées',
                },
                disabled: {
                    title: 'Enveloppes désactivées',
                },
                new: {
                    title: 'Nouvelle enveloppe',
                },
                form: {
                    title: "Informations",
                    name: 'Nom',
                    icon: 'Icône',
                },
                situation: {
                    title: 'Situation',
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
        moment.locale(language)
    },
}
