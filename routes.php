<?php

return [
    '/' => [
        'content' => 'Bienvenue sur la page d\'accueil!',
        'file' => 'views/home.php'
    ],
    '404' => [
        'content' => 'Erreur 404 : Page non trouvée.',
        'file' => 'views/404.php'
    ],
    // pour chaque nouvelle page, ajouter sa route
    // '/connexion' => [
    //     'content' => 'Page',
    //     'file' => 'views/login/login.php'
    // ],
];
