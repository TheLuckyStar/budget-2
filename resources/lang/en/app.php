<?php

/**
 * English application wide language lines
 */
return [

    // HTML layout
    'layout' => [
        'title' => 'Budget: keep it under control !',
        'description' => 'Online envelope system money to keep a budget under control',
        'author' => 'Simon Dubois',
        'toggle' => 'Toggle navigation',
        'leftFooter' => 'Designed and developed by '
            .Html::link('http://simon.dubandubois.com/en/', 'Simon Dubois').'. Powered by '
            .Html::link('http://laravel.com/', 'Laravel').', '
            .Html::link('http://startbootstrap.com/', 'Start Bootstrap').', '
            .Html::link('https://bootswatch.com/', 'Bootswatch').', '
            .Html::link('http://getbootstrap.com/css/', 'Bootstrap').' and '
            .Html::link('http://fontawesome.io/', 'Font Awesome').'.',
        'rightFooter' => Html::link(
            'https://github.com/simondubois/budget',
            '<i class="fa fa-fw fa-github"></i> Fork me on Github'
        ),
    ],

    // Button texts
    'button' => [
        'save' => 'Save',
    ],

    // Error messages
    'error' => [
        '404' => 'Page not found.',
        'guest' => 'Please authenticate to be granted.',
    ],

];
