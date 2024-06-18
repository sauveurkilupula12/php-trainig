<?php

require_once 'HTMLElement.php'; // Supposons que HTMLElement.php se trouve dans le même répertoire

class Input extends HTMLElement
{
    protected $type;
    protected $name;
    protected $value;

    public function __construct($type, $name, $value = '', $attributes = [])
    {
        parent::__construct('input', $attributes); // Appeler le constructeur parent

        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }

    public function render()
    {
        $html = '<input type="' . $this->type . '" name="' . $this->name . '" value="' . $this->value . '" ';

        foreach ($this->attributes as $key => $value) {
            $html .= $key . '="' . $value . '" ';
        }

        $html .= '>';

        return $html;
    }
}