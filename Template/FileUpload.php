<?php

class FileUpload
{
    protected $nomChamp;
    protected $repertoireTelechargement;
    protected $extensionsAutorisees = [];
    protected $tailleMaxFichier = null;
    protected $fichierTelecharge;
    protected $erreur;

    public function __construct($nomChamp, $repertoireTelechargement, $extensionsAutorisees = [], $tailleMaxFichier = null)
    {
        $this->nomChamp = $nomChamp;
        $this->repertoireTelechargement = $repertoireTelechargement;
        $this->extensionsAutorisees = $extensionsAutorisees;
        $this->tailleMaxFichier = $tailleMaxFichier;

        if (isset($_FILES[$this->nomChamp])) {
            $this->fichierTelecharge = $_FILES[$this->nomChamp];
        } else {
            $this->erreur = 'Fichier non téléchargé';
        }
    }

    public function valider()
    {
        $valide = true;

        if ($this->erreur) {
            return false;
        }

        // Vérifier la taille du fichier
        if ($this->tailleMaxFichier !== null && $this->fichierTelecharge['size'] > $this->tailleMaxFichier) {
            $this->erreur = 'La taille du fichier dépasse la taille maximale: ' . $this->tailleMaxFichier . ' octets';
            $valide = false;
        }

        // Vérifier l'extension du fichier
        if (!empty($this->extensionsAutorisees)) {
            $extension = strtolower(pathinfo($this->fichierTelecharge['name'], PATHINFO_EXTENSION));
            if (!in_array($extension, $this->extensionsAutorisees)) {
                $this->erreur = 'Extension de fichier invalide. Extensions autorisées: ' . implode(', ', $this->extensionsAutorisees);
                $valide = false;
            }
        }

        return $valide;
    }

    public function telecharger()
    {
        if (!$this->valider()) {
            return false;
        }

        $nomFichier = $this->genererNomFichier();
        $cheminFichier = $this->repertoireTelechargement . '/' . $nomFichier;

        if (move_uploaded_file($this->fichierTelecharge['tmp_name'], $cheminFichier)) {
            return $nomFichier;
        } else {
            $this->erreur = 'Échec du téléchargement du fichier';
            return false;
        }
    }

    public function getErreur()
    {
        return $this->erreur;
    }

    private function genererNomFichier()
    {
        $nomBase = pathinfo($this->fichierTelecharge['name'], PATHINFO_FILENAME);
        $extension = strtolower(pathinfo($this->fichierTelecharge['name'], PATHINFO_EXTENSION));

        $nomFichier = uniqid($nomBase . '_') . '.' . $extension;
        return $nomFichier;
    }
}