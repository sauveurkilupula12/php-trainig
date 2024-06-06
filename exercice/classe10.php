<?php
class Product {
    private $name;
    private $price;
  
    public function __construct($name, $price) {
      $this->name = $name;
      $this->price = $price;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getPrice() {
      return $this->price;
    }
  
    public function __clone() {
      echo "Clonage du produit : " . $this->getName() . PHP_EOL;
      // Optionnel : Vous pouvez cloner les propriétés ici si nécessaire
    }
  }
  
  // Exemple d'utilisation
  $product1 = new Product("T-shirt", 19.99);
  
  $product2 = clone $product1; // Affiche : Clonage du produit : T-shirt
  echo "Produit original : " . $product1->getName() . " - Prix : " . $product1->getPrice() . PHP_EOL;
  echo "Produit cloné : " . $product2->getName() . " - Prix : " . $product2->getPrice() . PHP_EOL;