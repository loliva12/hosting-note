<!-- Comienza código: read.php -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Nota</th>
        </tr>
    </thead>
    <tbody>
        <?PHP
            $query = "SELECT * FROM notas";
            $result = mysqli_query($DB_conn, $query);

            while($register = mysqli_fetch_array($result)) { ?>
                <tr onclick="document.location = './edit-notas.php?id_nota=<?PHP echo $register['id_nota']; ?>'">
                    <td><?PHP echo $register['id_nota']; ?></td>
                    <td><?PHP echo $register['nombre']; ?></td>
                    <td><?PHP echo $register['descripcion']; ?></td>
                    <td>

                        <a href="./edit-notas.php?id_nota=<?PHP echo $register['id_nota']; ?>" class="btn btn-success" title="Editar el registro <?PHP echo $register['id_nota']; ?>">
                            <!-- icono para editar -->
                            <i class="fas fa-user-edit"></i>
                        </a>
                        <a href="./delete-notas.php?id_nota=<?PHP echo $register['id_nota']; ?>" class="btn btn-danger" title="Borrar el registro <?PHP echo $register['id_nota']; ?>">
                            <!-- icono para eliminar -->
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
            <?PHP } ?>
    </tbody>
</table>
