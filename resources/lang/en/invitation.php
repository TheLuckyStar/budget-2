<?php

/**
 * English user language lines
 */
return [

    // Model helper
    'helper' => 'waiting for user registration',

    // Model fields
    'fields' => [
        'account_id' => 'Account',
        'email' => 'E-mail',
    ],

    // Invite future user email content
    'inviteFutureUser' => [
        'emailSubject' => ':user has invited you to join his/her budget application',
        'emailContent' => ':user want to share with you his/her account ":account".<br>To participate, please register.',
        'emailLink' => "Register now",
    ],

    // Invite existing user email content
    'inviteExistingUser' => [
        'emailSubject' => ':user has shared an account with you',
        'emailContent' => ':user wants to share with you his/her account ":account".<br>To participate, please login.',
        'emailLink' => "Login now",
    ],

];
