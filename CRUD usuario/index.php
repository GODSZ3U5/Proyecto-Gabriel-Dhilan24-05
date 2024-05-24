<?php
include('connection.php');
$con = connection();
$sql = "SELECT * FROM usuario";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>

<body>
    <div>
        <form action="insertar_usuario.php" method="POST">
            <h1>Crear nuevo usuario</h1>
            <input type="text" name="Nombre" placeholder="Nombre">
            <input type="text" name="Apellido" placeholder="Apellido">
            <input type="text" name="Telefono" placeholder="telefono">
            <input type="date" name="Fecha_nacimiento" placeholder="Fecha_nacimiento">
            <input type="text" name="Correo_electronico" placeholder="Correo_electronico">
            <input type="text" name="Contraseña" placeholder="contraseña">

            <input type="Submit" value="Crear">
        </form>
    </div>
</body>
<div>
    <h3>Usuarios</h3>
    <table>
        <thead>
            <tr>
                <th>ID del usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Fecha de nacimiento</th>
                <th>Correo electronico</th>
                <th>Contraseña</th>
                <th>
                <th></th>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_array($query)); ?>
            <tr>
                <th><?= $row('ID') ?></th>
                <th><?= $row('Nombre') ?></th>
                <th><?= $row('Apellido') ?></th>
                <th><?= $row('Telefono') ?></th>
                <th><?= $row('Fecha_nacimiento') ?></th>
                <th><?= $row('Correo_electronico') ?></th>
                <th><?= $row('Contraseña') ?></th>
                <th><a href="">EDITAR</a></th>
                <th><a href="">ELIMINAR</a></th>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</html>