<?php

class Database {

    public static function connect() {

        $host = 'sql211.infinityfree.com';
        $db   = 'if0_41117976_BD_PROYECTO';
        $user = 'if0_41117976';
        $pass = 'Prueba2468DAW';

        $conn = new mysqli($host, $user, $pass, $db);

        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        return $conn;
    }
}
