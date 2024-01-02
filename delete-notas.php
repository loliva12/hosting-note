<!-- Comienza código: delete.php -->
<?PHP

require_once ("./ludb.php");

if($_GET['id_nota']) {
    $id_nota = $_GET['id_nota'];
    $query = "DELETE FROM notas
                WHERE id_nota = $id_nota";

if ($DB_conn->query($query) === TRUE) {
  echo '<script>alert("Borrado exitoso")</script>';
  include ("./crud-notas.php");
  } else {
    echo "Error deleting record: " . $DB_conn->error;
    exit;
  }            
    
    //header("Location: ./crud-cliente.php");
}

?>


