<?php

function connection(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="diplomado";

    $connect= mysqli_connect ($host, $user, $pass);

    if(!$connect){
        die("No hay conexión: ".mysqli_connect_error());
    }else{
        echo "";
    }
    mysqli_select_db($connect, $bd);

    return $connect;
}

$conexion = connection();

?>