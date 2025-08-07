<?php

namespace App\Entity;

class Client extends Personne
{
    private string $adresse;

    public function __construct(string $nom, string $prenom, string $adresse)
    {
        parent::__construct($nom, $prenom);
        $this->setCoord($adresse);

    }

    public function setCoord(string $adresse): void{
        $this->adresse = $adresse;
    }

    public function __toString(){
        return 'Prénom: '.$this->prenom.'<br>'.'Nom: '.$this->nom.'<br>'.'Adresse: '.$this->adresse.'<br>';
    }

}