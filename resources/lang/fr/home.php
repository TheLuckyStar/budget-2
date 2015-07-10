<?php

/**
 * French home language lines
 */
return [

    // /home/guest
    'guest' => [

        'title' => 'Accueil',

        // Header
        'jumbotron' => [
            'title' => 'Enveloppez votre budget !',
            'demoLink' => Html::linkAction(
                'Auth\AuthController@getLogin', // @TODO Link to demo page
                'Version de démonstration',
                [],
                ['class' => 'link-to-page btn btn-lg btn-warning']
            ),
        ],

        // 1st block : benefits
        'benefits' => [
            'title' => "Quel est l'intérêt de cette méthode ?",
            'subtitle' => "Je ne connais pas le système des enveloppes...",
            'content' => [
                "Surveillez l'évolution de vos postes de dépenses (appelés \"enveloppes\").",
                "Décidez d'effectuer ou non un achat important à partir du solde de l'enveloppe.",
                'Estimez le coût de projets tels les voyages et événements.',
                'Plannifiez votre épargne et tenez vos objectifs !',
            ],
            'footer' => Html::link(
                'http://www.fcac-acfc.gc.ca/Fra/ressources/programmesEducatifs/ft-of/Pages/rdb-4-5.aspx',
                'En apprendre davantage sur le système de comptabilité par enveloppe'
            ),
        ],

        // 2nd block : usages
        'usages' => [
            'title' => 'Comment dois-je procéder ?',
            'subtitle' => "Je n'ai pas de compétence comptable ni technologique...",
            'content' => [
                '1. Regroupez vos dépenses par thématique (appelée enveloppe).',
                '2. Saisissez vos revenus et répartissez-les dans les enveloppes.',
                '3. Saisisez vos dépenses et placez-les dans des enveloppes.',
                '4. Naviguez parmi les résumés et les graphiques pour prendre vos décisions !',
            ],
            'footer' => Html::linkAction(
                'Auth\AuthController@getLogin', // @TODO Link to demo page
                'Essayer la version de démonstration',
                [],
                ['class' => 'link-to-page']
            ),
        ],

        // 3rd block : features
        'features' => [
            'title' => 'Pourquoi devrais-je utiliser ce site ?',
            'subtitle' => 'Des tableaux et des formulaires. Ça ressemble à un tableur...',
            'content' => [
                "Des graphiques pertinents illustrent la répartition de votre argent et son évolution.",
                'Partage de comptes et historique des actions des utilisateurs pour comptes joints.',
                'Conçu pour ordinateurs, tablettes et smartphones, sans application.',
                'Traduit en français et anglais. Contactez-nous pour ajouter des traductions.',
            ],
            'footer' => Html::linkAction(
                'Auth\AuthController@getLogin',
                "Prêt à commencer ? S'inscrire maintenant !",
                [],
                ['class' => 'link-to-page']
            ),
        ],

        // 4th block : trust
        'trust' => [
            'title' => 'Est-ce digne de confiance ?',
            'subtitle' => "L'argent est une donnée sensible...",
            'content' => [
                'Application libre: en constante amélioration par la communauté.',
                'Application libre: le code source est librement consultable.',
                'Développé par des bénévoles: vos données ne seront jamais utilisées.',
                "Toujours pas convaincu ? Vous pouvez l'héberger par vous-même si vous préférez.",
            ],
            'footer' => Html::link(
                'https://github.com/simondubois/budget',
                'Page du projet sur Github'
            ),
        ],

    ],

    // /home/authenticated
    'authenticated' => [
        'layout' => [
            'title' => 'Accueil',
        ],
    ],

];
