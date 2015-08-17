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
        'redirectMessage' => 'Pour commencer, créez un nouveau compte.',
        'successMessage' => 'Le compte :account a bien été créé.',
    ],

    'update' => [
        'title' => 'Modifier le compte',
        'successMessage' => 'Le compte :account a bien été modifié.',
    ],

    'delete' => [
        'title' => 'Comptes archivés',
        'successMessage' => "Le compte :account a bien été archivé.<br>"
            ."Il reste accessible dans le menu <i class='fa fa-fw fa-archive'></i> à droite de la liste des comptes dans le menu en haut.",
    ],

    'restore' => [
        'successMessage' => 'Le compte :account a bien été restauré.',
    ],

    'summary' => [
        'title' => 'Résumé',
        'balance' => [
            'title' => 'Solde du compte : <b>:balance</b>'
        ],
        'envelopes' => [
            'title' => 'Solde des enveloppes'
        ],
        'users' => [
            'title' => "Participants",
            'owner' => "Créateur",
            'attachUserMessage' => ":user a été rattaché à ce compte.",
            'detachUserMessage' => ":user a été détaché de ce compte.",
        ],
    ],

    'allocation' => [
        'title' => 'Répartition des revenus',
        'sliderTitle' => 'Configuration',
        'prevIncome' => 'Mois précédent : :amount',
        'revenueInMonth' => 'Revenu ce mois',
        'allocatedInMonth' => 'Alloué ce mois',
        'unallocatedInMonth' => 'Épargné ce mois',
        'unallocatedEndMonth' => 'Total de l\'épargne à la fin du mois',
        'chartTitle' => 'Solde des enveloppes au :date :',
    ],

    'development' => [
        'title' => 'Évolution',
    ],

];