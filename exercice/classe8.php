<?php
class Division {
    public function divide($dividend, $divisor) {
      if ($divisor === 0) {
        throw new Exception("Impossible de diviser par zéro.");
      }
  
      return $dividend / $divisor;
    }
  }
  
  // Exemple d'utilisation
  $division = new Division();
  
  try {
    echo $division->divide(10, 2) . PHP_EOL; // Affiche : 5
    echo $division->divide(10, 0) . PHP_EOL; // Lève une exception Division par zéro
  } catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
  }