<?php
    session_start();
    include "conexion.php";
    $conexion = conexion();
    $idEquipo = $_POST['idEquipo'];

    //obtenemos el nombre del archivo y formamos la ruta de donde se encuentra
    //para poder localizarlo y eliminarlo
    $sql = "SELECT nombre_archivo FROM t_equipos WHERE id_equipo = '$idEquipo' ";
    $respuesta = mysqli_query($conexion, $sql);
    $nombreArchivo = mysqli_fetch_row($respuesta)[0];

    $rutaDeArchivo = "../archivos/" . $nombreArchivo;

    //eliminar el registro del archivo en bd

    $sql = "DELETE FROM t_equipos WHERE id_equipo = '$idEquipo'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        if (unlink($rutaDeArchivo)) {
            $_SESSION['operacion'] = "delete";
        } else {
            $_SESSION['operacion'] = "error2";
        }
    } else {
        $_SESSION['operacion'] = "error2";
    }

    header("location:../index.php");