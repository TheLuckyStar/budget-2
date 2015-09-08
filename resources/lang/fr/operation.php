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
        'to_account_id' => "Compte débiteur",
        'from_account_id' => "Compte créditeur",
        'accountFromPrefix' => "de",
        'accountToPrefix' => "vers",
        'name' => "Intitulé",
        'amount' => "Montant",
        'date' => "Date",
        'type' => "Type",
    ],

    'aggregate' => [
        'total' => 'Total',
        'totalIncome' => 'Total des revenus',
        'totalOutcome' => 'Total des dépenses',
        'balance' => 'Solde',
        'balanceAt' => 'Solde au :date',
    ],

    'type' => [
        'revenue' => 'Revenu',
        'allocatedRevenue' => 'Revenu alloué',
        'unallocatedRevenue' => 'Revenu non alloué',
        'income' => 'Revenu',
        'outcome' => 'Dépense',
        'intendedOutcome' => 'Dépense prévue :date',
        'effectiveOutcome' => 'Dépense effectuée',
        'incomingTransfer' => 'Virement entrant',
        'outgoingTransfer' => 'Virement sortant',
    ],

];
