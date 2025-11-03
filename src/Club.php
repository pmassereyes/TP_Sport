<?php
namespace TpSport;

use TpSport\Sport;

class Club {
    private int $idClub;
    private string $nomClub;
    private int $nbPoints;
    private array $lesSports = [];

    public function __construct(int $idClub, string $nomClub, int $nbPoints) {
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

    public function getNbPoints(): int {
        return $this->nbPoints;
    }

    public function getLesSports(): array {
        return $this->lesSports;
    }

    public function ajouterSport(Sport $unSport): void {
        $this->lesSports[] = $unSport;
    }
}