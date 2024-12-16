<?php

class Database {
    public static function conexion() {
        // Intentar la conexión
        $db = mysqli_connect("161.132.50.160:3306", "raymond", "Upt2024", "bdmijostore");

        // Comprobar si hay errores de conexión
        if (!$db) {
            die("Error de conexión: " . mysqli_connect_error());
        }

        // Establecer el conjunto de caracteres
        $db->query("SET NAMES 'utf8'");

        return $db;
    }
}
