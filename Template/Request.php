<?php

class Requête
{
    public static function get($key, $default = null)
    {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        } else {
            return $default;
        }
    }

    // D'autres méthodes pour gérer POST, les cookies, etc. peuvent être ajoutées ici
}