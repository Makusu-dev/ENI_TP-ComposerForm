<?php

namespace App\Entity;

use http\Exception;

class Electeur extends Personne
{
    private bool $aVote;

    private string $vote;
    private int $bureauDeVote;

    public function __construct(string $nom, string $prenom, string $vote, int $bureauDeVote)
    {
        parent::__construct($nom, $prenom);
        $this->vote = $vote;
        $this->aVote = false;
        $this->bureauDeVote = $bureauDeVote;
    }

    private function Vote(): bool{
        return (!$this->aVote)? $this->aVote=true: $this->aVote=false;
    }

}