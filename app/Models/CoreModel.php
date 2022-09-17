<?php

namespace Pokedex\Models;

class CoreModel
{
    /**
     * id
     *
     * @var int
     */
    protected $id;
    /**
     * name
     *
     * @var string
     */
    protected $name;

    /**
     * Get id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }
}