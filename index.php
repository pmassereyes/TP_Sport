<?php
require __DIR__ . '/vendor/autoload.php';
use TpSport\Club;
use TpSport\Sport;
use TpSport\SportBallon;
use TpSport\SportRelais;
// Init les clubs
$club = array();
$club[1] = new Club(1, "Dijon", 63);
$club[2] = new Club(2, "PSG", 67);
$club[3] = new Club(3, "Nantes", 65);
echo "Liste des clubs : " . "<br>";
foreach($club as $clubs){
    echo $clubs->getIdClub() . " " . $clubs->getNomClub() . "\n" . "<br>";
}

//Les sports de Dijon
$sb = new SportBallon("Basketball", 5, 35, 45);
$club[1]->AjouterSport($sb);

//Les sports de PSG
$sport1 = new Sport("Javelot", 1);
$sport2 = new Sport("Judo", 1);
$sportBallon1 = new SportBallon("Football", 11, 68, 105);
$sportBallon2 = new SportBallon("Handball", 7, 35, 65);
$sportRelais1 = new SportRelais("4 * 100", 400, 4);
$club[2]->AjouterSport($sport1);
$club[2]->AjouterSport($sport2);
$club[2]->AjouterSport($sportBallon1);
$club[2]->AjouterSport($sportBallon2);
$club[2]->AjouterSport($sportRelais1);

// Les sports Nantes
$sport3 = new Sport("Cyclisme", 1);
$sportBallon3 = new SportBallon("FootBall", 11, 68, 105);
$sportBallon4 = new SportBallon("Ruby", 15, 65, 115);
$sportRelais2 = new SportRelais("100m", 100, 1);
$club[3]->AjouterSport($sport3);
$club[3]->AjouterSport($sportBallon3);
$club[3]->AjouterSport($sportBallon4);
$club[3]->AjouterSport($sportRelais2);

//Afficher pour Dijon

echo "Liste des sports du club " . $club[1]->getNomClub() . " :<br>";

foreach ($club[1]->getLesSports() as $sport) {
    echo "Nom : " . $sport->getNomSport() ." Nb : " . $sport->getNbJoueurs(). "<br>";
}

//Afficher pour le PSG

echo "Liste des sports du club " . $club[2]->getNomClub() . " :<br>";

foreach ($club[2]->getLesSports() as $sport) {
    echo "Nom : " . $sport->getNomSport() ." Nb : " . $sport->getNbJoueurs(). " Longueur "  . "<br>";
}

//Afficher pour Nantes

echo "Liste des sports du club " . $club[3]->getNomClub() . " :<br>";

foreach ($club[3]->getLesSports() as $sport) {
    echo "Nom : " . $sport->getNomSport() ." Nb : " . $sport->getNbJoueurs(); 
    if ($sport instanceof TpSport\SportBallon) {
        echo " Longueur : " . $sport->getLongueur();
    }
    echo "<br>";
}