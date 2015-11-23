<?php

/**
 * French operation language lines
 */
return [

    'title' => 'Opérations',

    'add' => [
        'title' => 'Ajouter des opérations',
    ],

    'object' => [
        'revenue' => '<i class="fa fa-fw fa-exchange" title="Revenu"></i> '
            .'Le revenu ":name" de :amount du :date',
        'income' => '<i class="fa fa-fw fa-exchange" title="Revenu"></i> '
            .'L\'allocation mensuelle de :amount de :date',
        'outcome' => '<i class="fa fa-fw fa-exchange" title="Dépense"></i> '
            .'La dépense ":name" de :amount du :date',
        'transfer' => '<i class="fa fa-fw fa-exchange" title="Virement"></i> '
            .'Le virement de :from_account vers :to_account de :amount du :date',
    ],

    'fields' => [
        'envelope_id' => "Enveloppe",
        'account_id' => "Compte",
        'to_account_id' => "Compte créditeur",
        'from_account_id' => "Compte débiteur",
        'accountFromPrefix' => "de",
        'accountToPrefix' => "vers",
        'name' => "Intitulé",
        'amount' => "Montant",
        'date' => "Date",
        'type' => "Type",
    ],

    'placeholder' => [
        'envelope_id_for_revenue' => 'Ensemble du compte',
        'envelope_id_for_outcome' => 'Enveloppe',
    ],

    'aggregate' => [
        'total' => 'Total',
        'totalIncome' => 'Total des revenus',
        'totalOutcome' => 'Total des dépenses',
        'balance' => 'Solde',
        'balanceEnvelopes' => 'Solde des enveloppes',
        'balanceAt' => 'Solde au :date',
    ],

    'type' => [
        'revenue' => 'Revenu',
        'allocatedRevenue' => 'Revenu alloué',
        'unallocatedRevenue' => 'Revenu non alloué',
        'income' => 'Revenu',
        'outcome' => 'Dépense',
        'incomingTransfer' => 'Virement entrant',
        'outgoingTransfer' => 'Virement sortant',
        'recurringRevenues' => 'Revenus récurrents',
        'recurringOutcomes' => 'Dépenses récurrentes',
        'recurringIncomingTransfers' => 'Virements entrants récurrents',
        'recurringOutgoingTransfers' => 'Virements sortants récurrents',
    ],

];
