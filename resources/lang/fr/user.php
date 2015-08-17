<?php

/**
 * French user language lines
 */
return [

    // Model fields
    'fields' => [
        'name' => 'Nom',
        'email' => 'E-mail',
        'password' => 'Mot de passe',
        'password_confirmation' => 'Confirmer le mot de passe',
        'remember' => 'Se souvenir de moi',
    ],

    // Login action
    'login' => [
        'title' => 'Connexion',
        'submit' => 'Se connecter',
        'errorMessage' => 'Identifiants incorrects.',
        'successMessage' => 'Bonjour :username. Bienvenue dans votre application comptable.',
    ],

    // Register action
    'register' => [
        'title' => 'Inscription',
        'submit' => 'S\'inscrire',
        'successMessage' => 'Bonjour :username. Bienvenue dans votre application comptable.',
        'emailSubject' => 'Bienvenue dans votre nouvelle application',
        'emailContent' => 'Prêt à travailler votre budget ?<br>Cliquez sur le lien ci-dessous pour commencer !',
        'emailLink' => 'Se connecter maintenant',
    ],

    // Lostpassword action
    'lostpassword' => [
        'title' => 'Mot de passe perdu',
        'message' => '<strong>Avez-vous perdu votre mot de passe ?</strong> '.
            'Veuillez remplir le champ ci-dessous avec votre adresse e-mail. '
            .'Vous recevrez ensuite un email contenant un lien de récupération. '
            .'Cliquez sur ce lien pour ouvrir le formulaire où vous pourrez définir un nouveau mot de passe.',
        'submit' => 'Récupérer maintenant',
        'emailSubject' => 'Réinitialisation de votre mot de passe',
        'emailContent' => 'Avez-vous perdu votre mot de passe ?<br>Cliquez sur le lien ci-dessous pour un définir un nouveau !',
        'emailLink' => 'Nouveau mot de passe',
    ],

    // Resetpassword action
    'resetpassword' => [
        'title' => 'Nouveau mot de passe',
    ],

    // Logout action
    'logout' => [
        'title' => 'Déconnexion',
        'successMessage' => 'Vous êtes maintenant déconnecté.',
    ],

];
