<?php

class Team {
    private $nom;
    private $entraineur;
    private $stade;
    private $ville;

    public function __construct($nom, $entraineur, $stade, $ville) {
        $this->nom = $nom;
        $this->entraineur = $entraineur;
        $this->stade = $stade;
        $this->ville = $ville;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getEntraîneur() {
        return $this->entraineur;
    }

    public function setEntraîneur($entraineur) {
        $this->entraineur = $entraineur;
    }

    public function getStade() {
        return $this->stade;
    }

    public function setStade($stade) {
        $this->stade = $stade;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }
}