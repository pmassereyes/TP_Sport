<?php
namespace TpSport;
use TpSport\Sport;
Class Club {
    private int $idClub;
    private string $nomClub;
    private int $nbPoints;
    private array $lesSports = array();

    public function __construct(int $idClub,string $nomClub,int $nbPoints){
        $this->idClub = $idClub;
        $this->nomClub = $nomClub;
        $this->nbPoints = $nbPoints;
    }

    public function getIdClub(): int {
        return $this->idClub;
    }
    public function getNomClub(): string {
        return $this->nomClub;
    }
    public function getLesSports(): Sport {
        return $this->lesSports;
    }
    public function getNbPoints(): int {
        return $this->nbPoints;
    }
    public function ajouterSport(): Sport {
        $this->unSport = $unSport;
    }
    

}