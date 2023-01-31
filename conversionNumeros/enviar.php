<?php
include("conexionBD.php");
//enviar los datos a la base de datos
$ingresado = $_POST['entrada1'];
$r = var_export ($resultado , true);
//pasa r a una cadena de texto
// $resultado = trim($r);
$resultado = $r;

date_default_timezone_set('America/Mexico_City');
//sacar fecha
$fecha = date("Y-m-d");
//sacar hora
$hora = date("H:i:s");
echo "<br/>" . $resultado;
echo "<br/>" . $ingresado;
echo "<br/>" . $fecha;
echo "<br/>" . $hora;

// insertar datos en la base de datos
// $sql_prepare = $conexion->prepare("INSERT INTO datos(ingresado, resultado, fecha, hora) VALUES (:ingresado,:resultado, :fecha, :hora)");
// $sql_prepare->bindParam(':ingresado', $ingresado);
// $sql_prepare->bindParam(':resultado', $resultado);
// $sql_prepare->bindParam(':fecha', $fecha);
// $sql_prepare->bindParam(':hora', $hora);
// if(
//     $sql_prepare->execute()){
//     echo "Datos guardados";
//     }else{
//         echo "un error";
//     }
$insertar = "INSERT INTO datos (ingresado, resultado, fecha, hora) VALUES ('{$ingresado}', {$resultado}, '{$fecha}', '{$hora}')";


// verificar si se insertaron los datos
// $verificar = mysqli_query($conexion, $insertar);
if (($result = mysqli_query($conexion, $insertar)) === false) {
    die(mysqli_error($conexion));
}else{
    echo "Datos guardados";
}
// if($verificar) {
//     echo "Datos guardados";	

// }else{
//     echo "Datos no guardados";
// }

?>