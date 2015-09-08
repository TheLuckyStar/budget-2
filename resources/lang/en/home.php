<?php

/**
 * English home language lines
 */
return [

    // /home/guest
    'guest' => [

        'title' => 'Homepage',

        // Header
        'jumbotron' => [
            'title' => 'Envelope your budget!',
            'demoButton' => 'Try it out!',
        ],

        // 1st block : benefits
        'benefits' => [
            'title' => 'How helpful is it?',
            'subtitle' => "I don't know envelope system...",
            'content' => [
                'Monitor your spending items (called "envelopes") over time.',
                'Decide whether or not to make important purchase based on envelopes balance.',
                'Estimate costs for projects like travelling or event.',
                'Plan your savings and reach your targets.',
            ],
            'footer' => Html::link(
                'https://en.wikipedia.org/wiki/Envelope_system',
                'Learn more about envelope system money'
            ),
        ],

        // 2nd block : usages
        'usages' => [
            'title' => 'What should I do?',
            'subtitle' => 'I have neither accounting nor tech skill...',
            'content' => [
                '1. List cost items as envelopes.',
                '2. Enter revenues and allocate them to envelopes.',
                '3. Enter outcomes for each envelopes.',
                '4. Browse charts and summaries to take your decisions.',
            ],
            'footer' => Html::linkAction(
                'HomeController@getDemo',
                'Try the demo now',
                [],
                ['class' => 'routable', 'data-target' => '#page-wrapper']
            ),
        ],

        // 3rd block : features
        'features' => [
            'title' => 'Why shoud I use this website instead?',
            'subtitle' => 'Tables and forms. Looks like spreadsheet...',
            'content' => [
                'Smart charts illustrate money allocation and evolutions.',
                'Account sharing and user action history for shared joint accounts.',
                'Designed for computers, tablets and smartphones, without app.',
                'Supported languages : English & French. Contact us to add more translations.',
            ],
            'footer' => Html::linkAction(
                'Auth\AuthController@getLogin',
                'Redy to start? Register now!',
                [],
                ['class' => 'link-to-page']
            ),
        ],

        // 4th block : trust
        'trust' => [
            'title' => 'Is it trustworthy?',
            'subtitle' => 'Money is sensitive data...',
            'content' => [
                'Open source application: constantly improved by community.',
                'Open source application: source code is freely browsable.',
                'Developed by volunteer: your data will not be used for any purpose.',
                'Still not convinced ? You can host it by yourself if you prefer.',
            ],
            'footer' => Html::link(
                'https://github.com/simondubois/budget',
                'Go to the Github project page'
            ),
        ],

    ],

    // /home/authenticated
    'authenticated' => [
        'layout' => [
            'title' => 'Home',
        ],
    ],

];
