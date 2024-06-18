<?php

class Cookie
{
    public static function set($nom, $valeur, $expiration = null, $path = null, $domaine = null, $secure = false, $httponly = false)
    {
        setcookie($nom, $valeur, $expiration, $path, $domaine, $secure, $httponly);
    }

    public static function get($nom, $valeurParDefaut = null)
    {
        if (isset($_COOKIE[$nom])) {
            return $_COOKIE[$nom];
        } else {
            return $valeurParDefaut;
        }
    }

    public static function delete($nom, $path = null, $domaine = null)
    {
        self::set($nom, '', time() - 3600, $path, $domaine);
    }
}