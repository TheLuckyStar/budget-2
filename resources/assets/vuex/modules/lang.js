
exports.state = {
    en: {
        app: {
            title: 'Budget EN',
            enable: 'Enable',
            disable: 'Disable',
            submit: 'Save',
        },
        home: {
            page: {
                title: 'Home',
            },
        },
        currencies: {
            form: {
                add: 'New currency',
                name: 'New currency name',
            },
        },
        accounts: {
            page: {
                title: 'Accounts',
                currencyWarning: "The active currency (<b>:active</b>) is different from the account currency (<b>:account</b>). Amounts have been converted.",
                currencyLink: "Display account<br>in original currency",
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
                currencyHelper: 'Currency can not be changed.',
            },
            balance: {
                title: 'Balance',
            },
            balances: {
                title: 'Situation in details',
                labels: ['Balance'],
            },
            development: {
                title: 'Development',
                labels: ['Balance', 'Revenues', 'Incoming transfers', 'Outgoing transfers', 'Outcomes'],
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
            balance: {
                title: 'Balance',
            },
            savings: {
                title: 'Saved this month',
            },
            balances: {
                title: 'Situation in details',
                labels: ['Balance'],
            },
            development: {
                title: 'Development',
                stateTitle: 'State',
                operationsTitle: 'Operations',
                balanceLabel: 'Balance',
                savingsLabel: 'Saved',
                revenuesLabel: 'Direct revenues',
                incomesLabel: 'Allocated revenues',
                outcomesLabel: 'Outcomes',
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
            title: 'Budget FR',
            enable: 'Activer',
            disable: 'Désactiver',
            submit: 'Enregistrer',
        },
        home: {
            page: {
                title: 'Accueil',
            },
        },
        currencies: {
            form: {
                add: 'Nouvelle devise',
                name: 'Nom de la nouvelle devise',
            },
        },
        accounts: {
            page: {
                title: 'Comptes',
                currencyWarning: "La devise active (<b>:active</b>) ne correspond pas à la devise du compte (<b>:account</b>). Les montants ont été convertis.",
                currencyLink: "Afficher le compte <br>dans sa devise d'origine",
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
                currencyHelper: 'La devise n\'est plus modifiable.',
            },
            balance: {
                title: 'Solde',
            },
            balances: {
                title: 'Détail de la situation',
                labels: ['Solde'],
            },
            development: {
                title: 'Évolution',
                labels: ['Solde', 'Revenus', 'Virements entrants', 'Virement sortants', 'Dépenses'],
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
            balance: {
                title: 'Solde',
            },
            savings: {
                title: 'Économisé ce mois',
            },
            balances: {
                title: 'Détail de la situation',
                labels: ['Solde'],
            },
            development: {
                title: 'Évolution',
                stateTitle: 'État',
                operationsTitle: 'Operations',
                balanceLabel: 'Solde',
                savingsLabel: 'Économisé',
                revenuesLabel: 'Revenus directs',
                incomesLabel: 'Revenus alloués',
                outcomesLabel: 'Dépenses',
            },
        },
        operations: {
            page: {
                title: 'Opérations',
            },
        },
    },
}
