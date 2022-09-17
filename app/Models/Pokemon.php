<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;

class Pokemon extends CoreModel
{
    protected $hp;
    protected $attack;
    protected $defense;
    protected $spe_attack;
    protected $spe_defense;
    protected $speed;
    protected $number;
    
    /**
     * Set id
     *
     * @param  int  $id  id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set name
     *
     * @param  string  $name  name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }


    /**
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**h2
h2
     * Set the value of hp
     *
     * @return  self
     */ 
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of attack
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set the value of attack
     *
     * @return  self
     */ 
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of spe_attack
     */ 
    public function getSpe_attack()
    {
        return $this->spe_attack;
    }

    /**
     * Set the value of spe_attack
     *
     * @return  self
     */ 
    public function setSpe_attack($spe_attack)
    {
        $this->spe_attack = $spe_attack;

        return $this;
    }

    /**
     * Get the value of spe_defense
     */ 
    public function getSpe_defense()
    {
        return $this->spe_defense;
    }

    /**
     * Set the value of spe_defense
     *
     * @return  self
     */ 
    public function setSpe_defense($spe_defense)
    {
        $this->spe_defense = $spe_defense;

        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }
    public function findAll()
    {
        $sql = '
        SELECT *
        FROM `pokemon`
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, '\Pokedex\Models\Pokemon');

        return $results;
    }
    public function findAllByType(int $id)
    {
        $sql = '
        SELECT pokemon.name, pokemon.number, type.name, type.id, pokemon.name as pokemon_name
        FROM `pokemon`
        INNER JOIN pokemon_type
        ON pokemon.number = pokemon_type.pokemon_number
        INNER JOIN type
        ON pokemon_type.type_id = type.id
        WHERE type.id = ' . $id . '
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, '\Pokedex\Models\Pokemon');

        return $results;
    }
    public function find(int $id)
    {
        $sql = '
        SELECT *, pokemon.name as pokemon_name, type.name as type_name
        FROM `pokemon`
        INNER JOIN pokemon_type
        ON pokemon.number = pokemon_type.pokemon_number
        INNER JOIN type
        ON pokemon_type.type_id = type.id
        WHERE number = ' . $id . '
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, '\Pokedex\Models\Pokemon');

        return $results;
    }
}

