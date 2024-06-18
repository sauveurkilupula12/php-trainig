<?php
abstract class HTMLElement
{
    protected $tag;
    protected $attributes = [];
    protected $content = '';

    public function __construct($tag, $attributes = [], $content = '')
    {
        $this->tag = $tag;
        $this->attributes = $attributes;
        $this->content = $content;
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function removeAttribute($name)
    {
        unset($this->attributes[$name]);
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public abstract function render();
}

class MyElement extends HTMLElement
{
    public function render()
    {
        $html = '<' . $this->tag . ' ';

        foreach ($this->attributes as $key => $value) {
            $html .= $key . '="' . $value . '" ';
        }

        $html .= '>';

        $html .= $this->content;

        $html .= '</' . $this->tag . '>';

        return $html;
    }
}

//$element = new MyElement('div', ['class' => 'container'], '<p>Ceci est un contenu.</p>');
//echo $element->render();

//<div class="container">
    //<p>Ceci est un contenu.</p>
//</div>//