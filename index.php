<?php

include("connection.php");
$con = connection();
$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>ACTIVIDAD 4</title>
</head>
<body>

<div class="input-wrapper">
    
    <form action="insert_user.php" method="POST">
    <h1>Crear Usuario</h1>

    <input type="text" placeholder="Nombre" name="name"><br>
    <input type="text" placeholder="Apellido" name="lastname"><br>
    <input type="text" placeholder="Usuario" name="username"><br>
    <input type="password" placeholder="Contraseña" name="password"><br>
    <input type="text" placeholder="Correo" name="email"><br>

    <input class="btn" type="submit" value="Agregar">

    </form>

</div><br><br><br>

<div class="users-table">
    <h2>Usuarios Agregados</h2>
    <table>

        <thead>

        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>Correo</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php while($row = mysqli_fetch_array($query)): ?>
        <tr>
            <th><?= $row['id'] ?></th>
            <th><?= $row['name'] ?></th>
            <th><?= $row['lastname'] ?></th>
            <th><?= $row['username'] ?></th>
            <th><?= $row['password'] ?></th>
            <th><?= $row['email'] ?></th>
            <th><a href="update.php?id=<?= $row['id']?>">Editar</a></th>
            <th><a href="delete_user.php?id=<?= $row['id']?>">Eliminar</a></th>
        </tr>
        <?php endwhile; ?>
        </tbody>

    </table>


</div>
    
</body>
</html>