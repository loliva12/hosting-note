<?php require_once ("./ludb.php"); ?>

<?php include ("./header-notas.php"); ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<main>
    <div class="container p-4">
        <div class="row">
            <div class="col">
                <button id="btnAgregarNuevo" class="btn btn-success">
                    <i class="fas fa-plus"></i> Agregar Nueva Nota
                </button>
                <div id="createNotasForm" style="display: none;">
                    <?php include ("./create-notas.php"); ?>
                </div>
            </div>
            <br>
            <br>
            <div class="col-12" id="readNotasSection">
                <?php include ("./read-notas.php"); ?>
            </div>
        </div>
    </div>
</main>

<script>
    $(document).ready(function() {
        $("#btnAgregarNuevo").click(function() {
            $("#createNotasForm").toggle();
            $("#readNotasSection").toggle();
        });
    });
</script>

<?php include ("./footer-notas.php"); ?>