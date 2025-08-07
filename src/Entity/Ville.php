<?php

namespace App\Entity;

class Ville
{   private string $nom;
    private string $dep;

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }


    public function setDepartement(string $dep): void{
    $this->dep = $dep;
    }

    public function __toString() : string {
    if(isset($dep)){
        return "La ville" .$this->nom ." n'a pas de département attribué ";
    }
        return "la ville ".$this->nom." est dans le département ".$this->dep;
}

}