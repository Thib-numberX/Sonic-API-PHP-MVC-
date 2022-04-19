<?php

//require __DIR__. 'vendor/autoload.php';

require __DIR__.'/../app//utils/Database.php';
require __DIR__.'/../app/controllers/MainControllers.php';
require __DIR__.'/../vendor/altorouter/altorouter/AltoRouter.php';
require __DIR__.'/../app/models/CoreModel.php';
require __DIR__.'/../app/models/Character.php';
require __DIR__.'/../app/models/Type.php';


$router = new AltoRouter();

// var_dump($router);

$router->setBasePath($_SERVER['BASE_URI']);

$router->map( 
    'GET',
    '/',
    [
        'controller' => 'MainController',
        'method' => 'homeAction'
    ],
    'home' );
// var_dump($router);

$router->map( 
    'GET',
    '/createur',
    [
        'controller' => 'MainController',
        'method' => 'createurAction'
    ],
    'createur' );


$match = $router->match();

//var_dump($match);


// ---- DISPATCHER ----- 
// On vérifie que la page demandée fait partie des routes existantes. Si $match ne contient pas false, on est sur une route existante
if($match !== false) {
  
    // On récupère le nom du controller dans lequel est rangé notre méthode qui gère la page demandée
    $controllerToUse = $match['target']['controller'];

    // On récupère dans le tableau des routes le nom de la méthode à exécuter. 
    $methodToUse = $match['target']['method'];


    // On récupère les paramètres dynamiques de l'url (exemple : id)
    $params = $match['params'];

    // On instancie le controller dans lequel est rangé la méthode
    // Si $controllerToUse contient "MainController", ça revient à écrire "new MainController()"
    $controller = new $controllerToUse();

    // On utilise la variable $methodToUse pour exécuter la méthode de controller dont le nom est stocké dedans.
    // Si  $methodToUse contient "homeAction", c'est comme si on écrivait "$controller->homeAction($params)"
    $controller->$methodToUse($params);

} else {
    echo "Erreur 404 - la page n'existe pas";
}