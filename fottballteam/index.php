<?php

include 'team.php';

/**
 * @Autor Sauveur
 */

$paris = new Team("Paris Saint-Germain", "Mauricio Pochettino", "Parc des Princes", "Paris");
$barcelone = new Team("FC Barcelone", "Xavi Hernandez", "Camp Nou", "Barcelone");

echo $paris->getNom() . "<br>";
$paris->setNom("PSG");
echo $paris->getNom() . "<br>";

echo $barcelone->getEntraîneur() . "<br>";
$barcelone->setEntraîneur("Pep Guardiola");
echo $barcelone->getEntraîneur() . "<br>";

echo "\nInformations sur le Paris Saint-Germain :\n";
echo "Nom : " . $paris->getNom() . "\n";
echo "Entraîneur : " . $paris->getEntraîneur() . "\n";
echo "Stade : " . $paris->getStade() . "\n";
echo "Ville : " . $paris->getVille() . "\n";

echo "\nInformations sur le FC Barcelone :\n";
echo "Nom : " . $barcelone->getNom() . "\n";
echo "Entraîneur : " . $barcelone->getEntraîneur() . "\n";
echo "Stade : " . $barcelone->getStade() . "\n";
echo "Ville : " . $barcelone->getVille() . "\n";