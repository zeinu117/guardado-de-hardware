<?php 

    $idEquipo = $_POST['idEquipo'];
    $nombre = $_POST['nombre'];
    $modelo = $_POST['modelo'];
    $numeroSerie = $_POST['numeroSerie'];
    $capacidad = $_POST['capacidad'];
    $descripcion = $_POST['descripcion'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "UPDATE t_equipos 
            SET nombre = '$nombre',
            modelo = '$modelo',
            numeroSerie = '$numeroSerie',
            capacidad = '$capacidad', 
                descripcion = '$descripcion' 
            WHERE id_equipo = '$idEquipo'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        header("location:../index.php");
    } else {
        echo "No se pudo actualizar :(";
    }