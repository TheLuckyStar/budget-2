<?php

/**
 * English account language lines
 */
return [

    'fields' => [
        'name' => "Name",
        'balance' => "Initial balance",
        'balanceHelper' => "<b>Must be a positiv amount.</b> This amount should match the account balance for the date you start recording operations into this application.",
    ],

    'index' => [
        'title' => 'Overview',
        'notfoundMessage' => 'Requested account has not been found.',
        'noEnvelopeMessage' => "<b>Next step ?</b> :link.",
    ],

    'add' => [
        'title' => 'Create a new account',
        'redirectMessage' => '<b>Where to start ?</b> Create a new account.',
        'successMessage' => 'The account :account has been created.',
    ],

    'update' => [
        'title' => 'Update account',
        'successMessage' => 'The account :account has been updated.',
    ],

    'delete' => [
        'title' => 'Archived accounts',
        'successMessage' => "The account :account has been archived.<br>"
            ."It is still accessible inside the menu <i class='fa fa-fw fa-archive'></i> on the right of the account list in top menu.",
    ],

    'restore' => [
        'successMessage' => 'Le compte :account a bien été restauré.',
    ],

    'summary' => [
        'title' => 'Summary',
        'balance' => [
            'title' => 'Account balance : <b>:balance</b>',
            'emptyMessage' => ':link to view the chart',
        ],
        'envelopes' => [
            'title' => 'Envelope balances',
            'emptyMessage' => ':link to view the chart',
        ],
        'users' => [
            'title' => "Participants",
            'owner' => "Owner",
            'attachUserMessage' => ":user has been attached to this account.",
            'detachUserMessage' => ":user has been detached from this account.",
        ],
    ],

    'allocation' => [
        'title' => 'Income allocation',
        'sliders' => [
            'prevIncome' => 'Previous month: :amount',
            'revenueInMonth' => 'Income this month',
            'allocatedInMonth' => 'Allocated this month',
            'unallocatedRevenueAt' => 'Savings at :date:',
            'unallocatedRevenueMonth' => 'Savings this month:',
            'chartTitle' => 'Envelope balances for :date',
            'emptyMessage' => ':link to allocate revenues',
        ],
    ],

    'development' => [
        'title' => 'Development',
        'envelopes' => [
            'emptyMessage' => ':link to view the chart',
        ],
    ],

];
