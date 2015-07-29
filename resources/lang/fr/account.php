<?php

/**
 * French account language lines
 */
return [

    'fields' => [
        'name' => "Nom",
    ],

    'index' => [
        'title' => "Vue d'ensemble",
        'notfoundMessage' => "Le compte recherché n'a pas été trouvé.",
    ],

    'add' => [
        'title' => 'Nouveau compte',
        'successMessage' => 'Le compte :account a bien été créé.',
    ],

    'summary' => [
        'title' => 'Résumé',
    ],

    'snapshot' => [
        'title' => 'État du compte le '.Carbon\Carbon::create()->formatLocalized('%A %d %B %Y'),
        'balanceTitle' => 'Solde du compte : :balance',
        'envelopesTitle' => 'Solde des enveloppes',
    ],

    'users' => [
        'title' => "Participants",
        'owner' => "Créateur",
        'attachUserMessage' => ":user a été rattaché à ce compte.",
        'detachUserMessage' => ":user a été détaché de ce compte.",
    ],

    'development' => [
        'title' => 'Évolution',
    ],

];