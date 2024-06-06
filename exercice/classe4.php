<?php
class MathHelper {
    // Méthode statique pour calculer le carré d'un nombre
    public static function square($number) {
      return $number * $number;
    }
  }
  
  // Exemple d'utilisation
  $result = MathHelper::square(5);
  echo "Le carré de 5 est : $result"; // Affiche : Le carré de 5 est : 25