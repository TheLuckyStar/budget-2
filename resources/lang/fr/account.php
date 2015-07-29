<?php

/**
 * English account language lines
 */
return [

    'index' => [
        'title' => "Vue d'ensemble",
        'notfoundMessage' => "Le compte recherché n'a pas été trouvé.",
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