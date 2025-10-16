<?php
namespace TpSport;
use TpSport\Sport;
Class SportBallon extends Sport {
    private int $largeur;
    private int $longueur;
    public function __construct(string $nomSport, int $nbJoueurs, int $largeur, int $longueur){
        parent::__construct($nomSport,$nbJoueurs);
        $this->largeur=$largeur;
        $this->longeur=$longeur;
    }
    public function getLargeur(): int {
        return $this->largeur;
    }
    public function getLongueur(): int {
        return $this->longueur;
    }
    public function getDescription(): string {
        return $this->description;
    }
}