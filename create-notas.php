<!-- Comienza código: create.php -->
<?PHP
session_start();
//$message = $_SESSION['message']; 
//$message_type = $_SESSION['message_type']; 
if(isset($message)) { ?>
    <div class="alert alert-<?PHP echo $message_type ?> alert-dismissible fade show" role="alert">
    <p><?PHP echo $message; ?></p>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?PHP 
    session_unset(); 
} ?>

<div class="card card-body">
    <div class="card-header" style="background-color: #859ef0; padding: 10px; font-weight: bold; text-align: center; font-size: 24px; color: #33006d">
        Crear Nota
    </div>
    <form action="./insert-notas.php" method="POST">
        <div class="form-group">
            <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese nombre" autofocus required>
            </div>
        
            <div class="mb-3">
                <label for="descripcion">Nota</label>
                <input type="text" name="descripcion" class="form-control" placeholder="" autofocus required>
            </div>

        </div>
        <input type="submit" class="btn btn-success" name="create" value="Crear">
    </form>
</div>
