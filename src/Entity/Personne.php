<?php

namespace App\Entity;

abstract class Personne
{

    public function __construct(protected string $nom, protected string $prenom )
    {
    }
}