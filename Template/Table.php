<?php

class Table
{
    private $headers; // Tableau des en-têtes de colonne
    private $data; // Tableau des données

    public function __construct($headers, $data)
    {
        $this->headers = $headers;
        $this->data = $data;
    }

    public function render()
    {
        $html = '<table>';

        // En-têtes du tableau
        $html .= '<tr>';
        foreach ($this->headers as $header) {
            $html .= '<th>' . $header . '</th>';
        }
        $html .= '</tr>';

        // Lignes de données
        foreach ($this->data as $row) {
            $html .= '<tr>';
            foreach ($row as $value) {
                $html .= '<td>' . $value . '</td>';
            }
            $html .= '</tr>';
        }

        $html .= '</table>';

        return $html;
    }
}