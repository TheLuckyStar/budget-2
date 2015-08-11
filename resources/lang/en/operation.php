<?php

/**
 * English operation language lines
 */
return [

    'title' => 'Operations',

    'object' => [
        'revenue' => '<i class="fa fa-fw fa-exchange" title="Revenue"></i> '
            .'The revenue ":name" of :amount on :date (:account)',
        'income' => '<i class="fa fa-fw fa-exchange" title="Income"></i> '
            .'The income mensuel of :amount on :date (:envelope)',
        'outcome' => '<i class="fa fa-fw fa-exchange" title="Outcome"></i> '
            .'The outcome ":name" of :amount on :date (:envelope)',
    ],

    'fields' => [
        'envelope_id' => "Envelope",
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
        'available' => 'Available money',
        'allocatedAvailable' => 'Allocated available money',
        'unallocatedAvailable' => 'Unallocated available money',
        'revenue' => 'Revenue',
        'allocatedRevenue' => 'Allocated revenue',
        'unallocatedRevenue' => 'Unallocated revenue',
        'income' => 'Revenue',
        'outcome' => 'Outcome',
        'intendedOutcome' => 'Intended outcome :date',
        'effectiveOutcome' => 'Effective outcome',
    ],

];
