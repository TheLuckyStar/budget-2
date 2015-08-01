<?php

/**
 * English account language lines
 */
return [

    'fields' => [
        'name' => "Name",
    ],

    'index' => [
        'title' => 'Overview',
        'notfoundMessage' => 'Requested account has not been found.',
    ],

    'add' => [
        'title' => 'New account',
        'successMessage' => 'The account :account has been created.',
    ],

    'update' => [
        'title' => 'Update details',
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
    ],

    'snapshot' => [
        'title' => 'Account snapshot the '.Carbon\Carbon::create()->formatLocalized('%A %d %B %Y'),
        'balanceTitle' => 'Account balance : :balance',
        'envelopesTitle' => 'Envelope balances',
    ],

    'users' => [
        'title' => "Participants",
        'owner' => "Owner",
        'attachUserMessage' => ":user has been attached to this account.",
        'detachUserMessage' => ":user has been detached from this account.",
    ],

    'development' => [
        'title' => 'Development',
        'monthTitle' => 'Month view (cumulative total)',
        'yearTitle' => 'Annual view (cumulative total)',
        'envelopesTitle' => 'Income spreading per envelope',
        'unallocatedBalanceTitle' => 'Allocated available money',
        'allocatedBalanceTitle' => 'Unallocated available money',
    ],

];
