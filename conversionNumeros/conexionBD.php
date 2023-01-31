<?php
//conectar a la base de datos mysql
$conexion = mysqli_connect("localhost","root","","conversion");
//verificar la conexion
if (mysqli_connect_errno()) {
    echo "Fallo al conectar con la base de datos";
    exit();
}


?>