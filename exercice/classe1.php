<?php
class Person {
  
  private $name;
  private $age;

  public function __construct($nom, $age) {
    $this->name = $nom;
    $this->age = $age;
  }

  // Méthode pour afficher le nom et l'âge
  public function sePresenter() {
    echo "Je m'appelle $this->name et j'ai $this->age ans.";
  }
}

// Création d'un objet Personne
$personne1 = new Person("Jean", 32);

// Affichage du nom et de l'âge de la personne
$personne1->sePresenter();