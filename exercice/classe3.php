<?php
interface Renderable {
  public function render();
}

class Page implements Renderable {
  private $message;

  public function __construct($message) {
    $this->message = $message;
  }

  public function render() {
    echo "<p>$this->message</p>";
  }
}

// Exemple d'utilisation
$page = new Page("Bienvenue sur notre site web !");
$page->render();