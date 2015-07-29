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
    ],

];