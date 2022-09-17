<?php

namespace Pokedex\Controllers;

class CoreController
{
    protected function show($viewName, $viewData = [])
    {
        // Permet de récupérer l'accès à l'objet $router
        global $router;
        $absoluteURL = $_SERVER['SCRIPT_NAME'];
        require_once __DIR__ . '/../views/header.tpl.php';
        // On charge le template dynamiquement selon contenu de l'URL
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    }
}