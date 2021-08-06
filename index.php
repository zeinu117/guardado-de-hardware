<?php include "header.php"; ?>
<?php
    session_start();
    $operacion = "";
    if (isset($_SESSION['operacion'])) {
        $operacion = $_SESSION['operacion'];
        unset($_SESSION['operacion']);
    }
?>
<!-- Page Content -->
<div class="container">
    <div class="card border-0 shadow my-2">
        <div class="card-body p-5">
            <h1 class="fw-light">Registro de dispositivos de hardware</h1>
            <p class="lead">
            <div class="row">
                <div class="col-sm-12">
                    <form action="servidor/agregarEquipo.php" enctype="multipart/form-data" method="POST">
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                
                                <label for="nombre">Nombre del dispositivo</label>
                                <input type="text" id="nombre" name="nombre" required class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="modelo">Modelo</label>
                                <input type="text" name="modelo" id="modelo" required class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="numeroSerie">Numero de serie</label>
                                <input type="number" name="numeroSerie" id="numeroSerie" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label for="capacidad">Capacidad</label>
                                <input type="text" name="capacidad" id="capacidad" class="form-control">
                            </div>
                            <div class="col-sm-4">
                                <label for="descripcion">Descripcion</label>
                                <input type="text" name="descripcion" id="descripcion" class="form-control" >
                            </div>
                            <div class="col-sm-4">
                                <label for="imagen">Imagen del dispositivo</label>
                                <input type="file" id="imagen" name="imagen" required class="form-control">
                            </div>
                        </div>

                        <br>
                        <button class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-sm-12">
                    <div id="tablaEquipo"></div>
                </div>
            </div>
            </p>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
<script>
let operacion = "<?php echo $operacion; ?>";

if (operacion == "insert") {
    Swal.fire(":D", "Agregado con exito!", "success");
} else if (operacion == "error") {
    Swal.fire(":(", "Error al agregar!", "error");
} else if (operacion == "delete") {
    Swal.fire(":D", "Eliminado con exito!", "info");
} else if (operacion == "error2") {
    Swal.fire(":(", "Error al eliminar!", "error");
}
</script>
<script>
$(document).ready(function() {
    $('#tablaEquipo').load('tablaEquipo.php');
});
</script>