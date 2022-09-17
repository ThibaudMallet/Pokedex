<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;

class Type extends CoreModel
{
    protected $color;
    
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
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
    public function findAll()
    {
        $sql = '
        SELECT *
        FROM `type`
        ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, '\Pokedex\Models\Type');

        return $results;
    }
}