<?php

/**
 * French user language lines
 */
return [

    // Model helper
    'helper' => "en attente d'inscription",

    // Model fields
    'fields' => [
        'account_id' => 'Compte',
        'email' => 'E-mail',
    ],

    // Invite future user email content
    'inviteFutureUser' => [
        'emailSubject' => ':user vous a invité à rejoindre son application comptable',
        'emailContent' => ':user souhaite partager avec vous le compte ":account".<br>Pour participer, inscrivez-vous !',
        'emailLink' => "S'inscrire maintenant",
    ],

    // Invite existing user email content
    'inviteExistingUser' => [
        'emailSubject' => ':user vous a partagé un compte avec vous',
        'emailContent' => ':user souhaite partager avec vous le compte ":account".<br>Pour accéder au compte, connectez-vous !',
        'emailLink' => "Se connecter maintenant",
    ],

];
