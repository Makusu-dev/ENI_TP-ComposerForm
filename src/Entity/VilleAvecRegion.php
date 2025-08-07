<?php

namespace App\Entity;

class VilleAvecRegion
{
    public function __construct(private string $nom, private string $dep, private string $reg)
    {
    }

    public function __toString() : string {

        return "la ville ".$this->nom." est dans le département ".$this->dep." de la région ".$this->reg;
    }

}