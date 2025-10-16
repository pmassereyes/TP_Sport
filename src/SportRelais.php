<?php
namespace TpSport;
use TpSport\Sport;
Class SportRelais extends Sport {
    private int $distance;
    public function __construct(string $nomSport, int $nbJoueurs, int $distance){
        parent::__construct($nomSport,$nbJoueurs);
        $this->largeur=$distance;
    }
    public function getDistance(): int {
        return $this->distance;
    }

    public function getDescription(): string {
        return $this->description;
    }
}