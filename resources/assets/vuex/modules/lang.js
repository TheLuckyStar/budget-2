
exports.state = {
    en: {
        app: {
            title: 'Budget EN',
            enable: 'Enable',
            disable: 'Disable',
            submit: 'Save',
            refresh: 'Refresh data',
        },
        home: {
            page: {
                title: 'Home',
            },
            accountSavings: {
                title: 'Account savings',
                monthlyTitle: 'This month',
                quarterlyTitle: 'Last 3 months',
                biannuallyTitle: 'Last 6 months',
                yearlyTitle: 'Last 12 months',
            },
            envelopeSavings: {
                title: 'Envelope savings',
            },
            bestEnvelopes: {
                title: 'Most profitable envelopes',
            },
            worstEnvelopes: {
                title: 'Less profitable envelopes',
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
            accumulatedSavings: {
                title: 'Accumulated savings',
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
                accumulatedSavingsLabel: 'Accumulated savings',
                monthlySavingsLabel: 'Monthly savings',
                revenuesLabel: 'Direct revenues',
                incomingTransfersLabel: 'Incoming transfers',
                outgoingTransfersLabel: 'Outgoing transfers',
                outcomesLabel: 'Outcomes',
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
            filters: {
                allAccounts: 'All accounts',
                allEnvelopes: 'All envelopes',
            },
            modal: {
                links: {
                    newRevenue: "New revenue",
                    newOutcome: "New outcome",
                },
                title: {
                    revenue: "Revenue",
                    outcome: "Outcome",
                },
                deleteButton: "Delete operation",
                deleteConfirmation: "Do you really want to delete this operation ?",
                saveButton: "Save operation",
            },
            attributes: {
                name: 'Title',
                account_id: 'Account',
                envelope_id: 'Envelope',
                amount: 'Amount',
                date: 'Date',
            },
            types: {
                income: 'Revenue allocation',
                outcome: 'Outcome',
                revenue: 'Revenue',
                transfer: 'Transfer',
            },
        },
    },
    fr: {
        app: {
            title: 'Budget FR',
            enable: 'Activer',
            disable: 'Désactiver',
            submit: 'Enregistrer',
            refresh: 'Actualiser les données',
        },
        home: {
            page: {
                title: 'Accueil',
            },
            accountSavings: {
                title: 'Épargne bancaire',
                monthlyTitle: 'Ce mois',
                quarterlyTitle: '3 derniers mois',
                biannuallyTitle: '6 derniers mois',
                yearlyTitle: '12 derniers mois',
            },
            envelopeSavings: {
                title: 'Économisé dans les envelopes',
            },
            bestEnvelopes: {
                title: 'Envelopes les plus profitables',
            },
            worstEnvelopes: {
                title: 'Envelopes les moins profitables',
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
            accumulatedSavings: {
                title: 'Épargne cumulée',
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
                accumulatedSavingsLabel: 'Épargne cumulée',
                monthlySavingsLabel: 'Épargne mensuelle',
                revenuesLabel: 'Revenus directs',
                incomingTransfersLabel: 'Transferts entrants',
                outgoingTransfersLabel: 'Transferts sortants',
                outcomesLabel: 'Dépenses',
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
            filters: {
                allAccounts: 'Tous les comptes',
                allEnvelopes: 'Toutes les envelopes',
            },
            modal: {
                links: {
                    newRevenue: "Nouveau revenu",
                    newOutcome: "Nouvelle dépense",
                },
                title: {
                    revenue: "Revenu",
                    outcome: "Dépense",
                },
                deleteButton: "Supprimer l'opération",
                deleteConfirmation: "Voulez-vous vraiment supprimer cette opération ?",
                saveButton: "Enregistrer l'opération",
            },
            attributes: {
                name: 'Titre',
                account_id: 'Compte',
                envelope_id: 'Enveloppe',
                amount: 'Montant',
                date: 'Date',
            },
            types: {
                income: 'Allocation de revenu',
                outcome: 'Dépense',
                revenue: 'Revenu',
                transfer: 'Virement',
            },
        },
    },
}
