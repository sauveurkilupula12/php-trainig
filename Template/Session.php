<?php

class Session {

    public static function start() {
        // Démarrage de la session
        session_start();
    }

    public static function set($key, $value) {
        // Définir une variable de session
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null) {
        // Lire une variable de session
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return $default;
        }
    }

    public static function destroy() {
        // Détruire la session
        session_destroy();
    }
}

// Exemple d'utilisation

Session::start();

Session::set('user', 'Alice');

echo Session::get('user', 'Guest'); // Affichera "Alice"

Session::destroy();s