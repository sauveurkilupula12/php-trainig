<?php

require_once 'HTMLElement.php'; // Supposons que HTMLElement.php se trouve dans le même répertoire

class Button extends HTMLElement
{
    protected $type;

    public function __construct($type, $content, $attributes = [])
    {
        parent::__construct('button', $attributes); // Appeler le constructeur parent

        $this->type = $type;
        $this->content = $content;
    }

    public function render()
    {
        $html = '<button type="' . $this->type . '" ';

        foreach ($this->attributes as $key => $value) {
            $html .= $key . '="' . $value . '" ';
        }

        $html .= '>' . $this->content . '</button>';

        return $html;
    }
}s