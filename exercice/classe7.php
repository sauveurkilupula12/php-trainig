<?php
class Circle {
    const PI = 3.141592653589793; // Déclaration de la constante PI
  
    private $radius; // Propriété privée pour stocker le rayon
  
    public function __construct($radius) {
      if ($radius <= 0) {
        throw new Exception("Le rayon d'un cercle doit être positif.");
      }
  
      $this->radius = $radius;
    }
  
    public function getArea() {
      return self::PI * $this->radius * $this->radius;
    }
  }
  
  // Exemple d'utilisation
  $circle = new Circle(5);
  echo "L'aire du cercle de rayon 5 est de : " . $circle->getArea() . PHP_EOL;