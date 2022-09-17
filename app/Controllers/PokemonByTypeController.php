<?php

namespace Pokedex\Controllers;

use \Pokedex\Models\Pokemon;

class PokemonByTypeController extends CoreController
{
    public function pokemontype($params)
    {  
        $pokemon = New Pokemon();
        $pokemonsByType = $pokemon->findAllByType($params['id']);
        $this->show('pokemonByType', $pokemonsByType);

    }
}