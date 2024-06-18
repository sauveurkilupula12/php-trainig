<?php

require_once 'HTMLElement.php'; // Supposons que HTMLElement.php se trouve dans le même répertoire

class Checkbox extends HTMLElement
{
    protected $name;
    protected $value;
    protected $checked;

    public function __construct($name, $value, $checked = false, $attributes = [])
    {
        parent::__construct('input', $attributes); // Appeler le constructeur parent

        $this->name = $name;
        $this->value = $value;
        $this->checked = $checked;
    }

    public function render()
    {
        $html = '<input type="checkbox" name="' . $this->name . '" value="' . $this->value . '" ';

        if ($this->checked) {
            $html .= 'checked ';
        }

        foreach ($this->attributes as $key => $value) {
            $html .= $key . '="' . $value . '" ';
        }

        $html .= '>';

        return $html;
    }
}