<?php
class Select
{
    private $name;
    private $options;
    private $attributes;

    public function __construct($name, $options, $attributes = [])
    {
        $this->name = $name;
        $this->options = $options;
        $this->attributes = $attributes;
    }

    public function render()
    {
        $html = '<select name="' . $this->name . '"';
        foreach ($this->attributes as $key => $value) {
            $html .= ' ' . $key . '="' . $value . '"';
        }
        $html .= '>';

        foreach ($this->options as $value => $label) {
            $selected = $this->isSelected($value);
            $html .= '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
        }

        $html .= '</select>';

        return $html;
    }

    private function isSelected($value)
    {
        if (isset($_POST[$this->name]) && $_POST[$this->name] === $value) {
            return 'selected';
        }

        return '';
    }
}