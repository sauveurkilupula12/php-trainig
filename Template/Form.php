<?php

require_once 'HTMLElement.php'; // Supposons que HTMLElement.php se trouve dans le même répertoire

class Form extends HTMLElement
{
    protected $elements = [];
    protected $attributes = [];

    public function __construct($attributes = [])
    {
        parent::__construct('form', $attributes); // Appeler le constructeur parent
    }

    public function addElement(HTMLElement $element)
    {
        $this->elements[] = $element;
    }

    public function render()
    {
        $html = parent::render(); // Obtenir la balise d'ouverture du formulaire du parent

        foreach ($this->elements as $element) {
            $html .= $element->render();
        }

        $html .= '</form>';

        return $html;
    }
}