<?php

    function conexion() {
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $db = "sistemasweb";

        $conexion = mysqli_connect($servidor, $usuario, $password, $db);

        return $conexion;
    }

?>
