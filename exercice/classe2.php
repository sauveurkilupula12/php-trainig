<?php

include 'classe1.php';
class Employee extends Person {
    // Propriété supplémentaire
    private $jobTitle;
  
    // Constructeur
    public function __construct($nom, $age, $jobTitle) {
      // Appel du constructeur de la classe parente
      parent::__construct($nom, $age);
  
      $this->jobTitle = $jobTitle;
    }
  
    // Méthode pour afficher toutes les informations
    public function afficherInformations() {
      // Appel de la méthode de la classe parente pour afficher le nom et l'âge
      parent::sePresenter();
  
      // Affichage du titre du poste
      echo "Mon titre de poste est : $this->jobTitle.";
    }
  }
  
  // Création d'un objet Employee
  $employee1 = new Employee("Pierre", 40, "Développeur Web");
  
  // Affichage des informations de l'employé
  $employee1->afficherInformations();