<?php

/**
 * French operation language lines
 */
return [

    'title' => 'Opérations',

    'object' => [
        'revenue' => '<i class="fa fa-fw fa-exchange" title="Revenu"></i> '
            .'Le revenu ":name" de :amount du :date (:account)',
        'income' => '<i class="fa fa-fw fa-exchange" title="Revenu"></i> '
            .'Le revenu mensuel de :amount de :date (:envelope)',
        'outcome' => '<i class="fa fa-fw fa-exchange" title="Dépense"></i> '
            .'La dépense ":name" de :amount du :date (:envelope)',
    ],

    'fields' => [
        'envelope_id' => "Enveloppe",
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
    ],

];
