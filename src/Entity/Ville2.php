<?php

namespace App\Entity;

class Ville2
{    public function __construct(private string $nom, private string $dep)
    {
    }

    public function getLongueurNom() : int{
        return strlen($this->nom);
    }

    public function __toString() : string {
    if(isset($dep)){
        return "La ville" .$this->nom ." n'a pas de département attribué ";
    }
        return "la ville ".$this->nom." est dans le département ".$this->dep;
}

}