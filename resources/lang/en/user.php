<?php

/**
 * English user language lines
 */
return [

    // Model fields
    'fields' => [
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Confirm password',
        'remember' => 'Remember me',
    ],

    // Login action
    'login' => [
        'title' => 'Log in',
        'submit' => 'Log in now',
        'errorMessage' => 'Incorrect credentials.',
        'successMessage' => 'Hello :username. Welcome to your budget application.',
    ],

    // Register action
    'register' => [
        'title' => 'Register',
        'submit' => 'Register now',
        'successMessage' => 'Hello :username. Welcome to your budget application.',
        'emailSubject' => 'Welcome to your new budget app',
        'emailContent' => 'Ready to work on your budget?<br>Click on the link below to get started!',
        'emailLink' => 'Login now',
    ],

    // Lostpassword action
    'lostpassword' => [
        'title' => 'Lost password',
        'message' => '<strong>Have you lost your password?</strong> '.
            'Please fill the field below with your email address. '
            .'You will then receive an email containing a recovery link. '
            .'Click on it to open a form where you will be able to set a new password.',
        'submit' => 'Recover now',
        'emailSubject' => 'Your password reset link',
        'emailContent' => 'Have you lost your password?<br>Click on the link below to set a new one!',
        'emailLink' => 'New password',
    ],

    // Resetpassword action
    'resetpassword' => [
        'title' => 'New password',
    ],

    // Logout action
    'logout' => [
        'title' => 'Log out',
        'successMessage' => 'You have been disconnected.',
    ],

];
