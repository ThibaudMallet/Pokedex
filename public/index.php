<?php

require_once __DIR__ . './../vendor/autoload.php';

// Instanciation de Altorouteur
$router = new AltoRouter();
$router->setBasePath(dirname($_SERVER['SCRIPT_NAME']));

$router->map(
    'GET',
    '/',
    [
        'action' => 'home',
        'controller' => '\Pokedex\Controllers\MainController'
    ],
    'home'
);

$router->map(
    'GET',
    '/type',
    [
        'action' => 'type',
        'controller' => '\Pokedex\Controllers\MainController'
    ],
    'type'
);

$router->map(
    'GET',
    '/pokemontype/[i:id]',
    [
        'action' => 'pokemontype',
        'controller' => '\Pokedex\Controllers\PokemonByTypeController'
    ],
    'pokemon-by-type'
);

$router->map(
    'GET',
    '/pokemondetail/[i:id]',
    [
        'action' => 'pokemondetail',
        'controller' => '\Pokedex\Controllers\PokemonDetailController'
    ],
    'pokemon-detail'
);

// on faire la liaison entre l'URL et les routes integrées via map
$match = $router->match();
// Determine si une route correspond a l'URL
if($match) {
    $methodToUse = $match['target']['action'];
    $controllerToUse = $match['target']['controller'];

    // On instancie notre controller
    $controller = new $controllerToUse();
    // On execute la methode definie dans la route
    $controller->$methodToUse($match['params']);
} else {
    // Si aucune route ne correspond a l'URL
    exit('404 Not found');
}
