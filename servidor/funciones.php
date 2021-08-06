<?php

    include "conexion.php";

    function agregarReferenciaArchivo($nombre, $nombre_archivo, $modelo, $numeroSerie,
                                    $capacidad, $descripcion, $extension) {
        $conexion = conexion();
        $sql = "INSERT INTO t_equipos (nombre,
                                        nombre_archivo,
                                        modelo,
                                        numeroSerie,
                                        capacidad,
                                        descripcion,
                                        extension) 
                VALUES ('$nombre',
                        '$nombre_archivo', 
                        '$modelo',
                        '$numeroSerie',
                        '$capacidad',
                        '$descripcion',
                        '$extension')";
        $respuesta = mysqli_query($conexion, $sql);

        return $respuesta;
    }