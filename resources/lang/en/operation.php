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
        'transfer' => '<i class="fa fa-fw fa-exchange" title="Transfer"></i> '
            .'The transfer from :from_account to :to_account of :amount on :date',
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

    'placeholder' => [
        'envelope_id_for_revenue' => 'The whole account',
        'envelope_id_for_outcome' => 'Envelope',
    ],

    'aggregate' => [
        'total' => 'Total',
        'totalIncome' => 'Total incomes',
        'totalOutcome' => 'Total outcomes',
        'balance' => 'Balance',
        'balanceEnvelopes' => 'Envelope balance',
        'balanceAt' => 'Balance at :date',
    ],

    'type' => [
        'revenue' => 'Revenue',
        'income' => 'Allocated revenue',
        'outcome' => 'Outcome',
        'incomingTransfer' => 'Incoming transfer',
        'outgoingTransfer' => 'Outgoing transfer',
        'recurringRevenues' => 'Recurrent revenues',
        'recurringOutcomes' => 'Recurrent outcomes',
        'recurringIncomingTransfers' => 'Recurrent incoming transfers',
        'recurringOutgoingTransfers' => 'Recurrent outgoing transfers',
    ],

];
