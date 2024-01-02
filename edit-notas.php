<!-- Comienza código: edit.php -->
<?PHP

include("./ludb.php");

if(isset($_GET['id_nota'])) {
    $id_nota = $_GET['id_nota'];
    $query = "SELECT * FROM notas
                WHERE id_nota = $id_nota";
    $result = mysqli_query($DB_conn, $query);
    if(mysqli_num_rows($result) == 1) {
        $register = mysqli_fetch_array($result);
        $nombre = $register['nombre'];
        $descripcion = $register['descripcion'];
    }
}

?>

<?php include ("./header-notas.php"); ?>

<div class="container p-4">
    <div class="row">
        <div class="col-4 mx-auto">
            <div class="card" card-body>
            <div class="card-header">Editar Nota</div>
                <form action="./update-notas.php" method="POST">
                    <input type="hidden" name="id_nota" value="<?PHP echo $id_nota ?>">
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text"  name="nombre" class="form-control" value="<?PHP echo $nombre ?>" placeholder="Escriba el nombre" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion">Nota</label>
                            <input type="text" name="descripcion" class="form-control" value="<?PHP echo $descripcion ?>"  required>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-success" name="update" value="Actualizar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include ("./footer-notas.php"); ?>