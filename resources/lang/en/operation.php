<?php

/**
 * English operation language lines
 */
return [

    'title' => 'Operations',

    'add' => [
        'title' => 'Add operations',
    ],

    'object' => [
        'revenue' => '<i class="fa fa-fw fa-exchange" title="Revenue"></i> '
            .'The revenue ":name" of :amount on :date (:account)',
        'income' => '<i class="fa fa-fw fa-exchange" title="Income"></i> '
            .'The monthly allocation of :amount on :date',
        'outcome' => '<i class="fa fa-fw fa-exchange" title="Outcome"></i> '
            .'The outcome ":name" of :amount on :date',
    ],

    'fields' => [
        'envelope_id' => "Envelope",
        'account_id' => "Account",
        'to_account_id' => "Creditor account",
        'from_account_id' => "Debtor account",
        'accountFromPrefix' => "from",
        'accountToPrefix' => "to",
        'name' => "Label",
        'amount' => "Amount",
        'date' => "Date",
        'type' => "Type",
    ],

    'aggregate' => [
        'total' => 'Total',
        'totalIncome' => 'Total incomes',
        'totalOutcome' => 'Total outcomes',
        'balance' => 'Balance',
        'balanceAt' => 'Balance at :date',
    ],

    'type' => [
        'revenue' => 'Revenue',
        'allocatedRevenue' => 'Allocated revenue',
        'unallocatedRevenue' => 'Unallocated revenue',
        'income' => 'Revenue',
        'outcome' => 'Outcome',
        'incomingTransfer' => 'Incoming transfer',
        'outgoingTransfer' => 'Outgoing transfer',
    ],

];
