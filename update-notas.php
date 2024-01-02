<!-- Comienza código: update.php -->
<?PHP
include ("./ludb.php");

if(isset($_POST['update'])) {    
    $id_nota       = $_POST["id_nota"];
    $nombre       = $_POST["nombre"];
    $descripcion    = $_POST["descripcion"];


    
    $query = "UPDATE notas SET    nombre = '$nombre',
                                  descripcion = '$descripcion'
                             WHERE  id_nota = $id_nota";

  if ($DB_conn->query($query) === TRUE) {
    echo '<script>alert("Registro actualizado")</script>';
    include ("./crud-notas.php");
  } else {
    echo "Error updating record: " . $DB_conn->error;
    exit;
  }                         
  
    $_SESSION['message'] = "Éxito: se actualizaron correctamente los datos del registro en la base.";
    $_SESSION['message_type'] = "primary";
   

}

?>
