<?php

namespace Pokedex\Controllers;

use \Pokedex\Models\Pokemon;

class PokemonDetailController extends CoreController
{
    public function pokemondetail($params)
    {  
        $pokemon = New Pokemon();
        $pokemonDetail = $pokemon->find($params['id']);
        $this->show('pokemonDetail', $pokemonDetail);

    }
}