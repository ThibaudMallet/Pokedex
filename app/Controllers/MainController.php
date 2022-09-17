<?php

namespace Pokedex\Controllers;

use \Pokedex\Models\Pokemon;
use \Pokedex\Models\Type;

class MainController extends CoreController
{
    public function home()
    {
        $pokemon = new Pokemon();
        $pokemons = $pokemon->findAll();
        $this->show('home', $pokemons);
    }

    public function type() 
    {
        $type = new Type();
        $types = $type->findAll();
        $this->show('type', $types);
    }
    public function pokemontype($params)
    {  
        $pokemon = New Pokemon();
        $pokemonsByType = $pokemon->findAllByType($params['id']);
        $this->show('pokemonByType', $pokemonsByType);

    }
}