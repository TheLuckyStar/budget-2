<?php

/**
 * French application wide language lines
 */
return [

    // HTML layout
    'layout' => [
        'title' => 'Budget: gardez-le sous contrôle !',
        'description' => 'Système de comptabilité par enveloppe pour garder un budget sous contrôle',
        'author' => 'Simon Dubois',
        'toggle' => 'Afficher le menu',
        'leftFooter' => 'Conçu et développé par '
            .Html::link('http://simon.dubandubois.com/fr/', 'Simon Dubois').'. Fonctionne grâce à '
            .Html::link('http://laravel.com/', 'Laravel').', '
            .Html::link('http://startbootstrap.com/', 'Start Bootstrap').', '
            .Html::link('https://bootswatch.com/', 'Bootswatch').', '
            .Html::link('http://getbootstrap.com/css/', 'Bootstrap').' et '
            .Html::link('http://fontawesome.io/', 'Font Awesome').'.',
        'rightFooter' => Html::link(
            'https://github.com/simondubois/budget',
            '<i class="fa fa-fw fa-github"></i> Fork me on Github'
        ),
    ],

    // Button content
    'button' => [
        'back' => "<i class='fa fa-fw fa-arrow-left'></i> Retour",
    ],

    // Error messages
    'error' => [
        '404' => "Page introuvable.",
    ],

];
