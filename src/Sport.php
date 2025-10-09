<?php
namespace TpSport;
Class Sport {
    private string $nomSport;
    private int $nbJoueurs;
    public function __construct(string $nomSport, int $nbJoueurs){
        $this->nomSport=$nomSport;
        $this->nbJoueurs=$nbJoueurs;
    }
    public function getNomSport(): string {
        return $this->nomSport;
    }
    public function getDescription(): string {
        return $this->description;
    }
    public function getNbJoueurs(): int {
        return $this->nbJoueurs;
    }
}