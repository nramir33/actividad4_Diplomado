<?php

include("connection.php");
$con = connection();
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array ($query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Editar Usuario</title>
</head>
<body>
    <div class="input-wrapper">
        
        <form action="edit_user.php" method="POST">
        <h1>Editar Usuario</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <input type="text" placeholder="Nombre" name="name" value="<?= $row['name'] ?>">
    <input type="text" placeholder="Apellido" name="lastname" value="<?= $row['lastname'] ?>">
    <input type="text" placeholder="Usuario" name="username" value="<?= $row['username'] ?>">
    <input type="password" placeholder="Contraseña" name="password" value="<?= $row['password'] ?>">
    <input type="text" placeholder="Correo" name="email" value="<?= $row['email'] ?>">

    <input class="btn" type="submit" value="Editar">

        </form>

    </div>
    
</body>
</html>