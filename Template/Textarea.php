<?php

require_once 'HTMLElement.php'; // Supposons que HTMLElement.php se trouve dans le même répertoire

class Textarea extends HTMLElement
{
    protected $content;

    public function __construct($name, $content, $attributes = [])
    {
        parent::__construct('textarea', $attributes); // Appeler le constructeur parent

        $this->name = $name;
        $this->content = $content;
    }

    public function render()
    {
        $html = '<textarea name="' . $this->name . '" ';

        foreach ($this->attributes as $key => $value) {
            $html .= $key . '="' . $value . '" ';
        }

        $html .= '>' . $this->content . '</textarea>';

        return $html;
    }
}