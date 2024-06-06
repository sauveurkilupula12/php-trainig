<?php
trait Logger {
    public function log($message) {
      echo "[" . date('Y-m-d H:i:s') . "] " . $message . PHP_EOL;
    }
  }
  
  class Application {
    use Logger;
  
    public function run() {
      $this->log("Démarrage de l'application");
  
      // ... Code de l'application ...
  
      $this->log("Arrêt de l'application");
    }
  }
  
  // Exemple d'utilisation
  $app = new Application();
  $app->run();