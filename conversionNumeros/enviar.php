<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>   
</head>
<body>
    <div class=" text-center mb-4"><em class="fs-3">Resultados obtenidos</em></div>
    <div class="container">
        <div class="row">
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
            echo" <div class='col-md-6 col-sm-12 col-lg-6 text-center mt-5'>
                    <div class='bg-light p-2 rounded fs-4'>
                        <label> <em> Resultado: $resultado </em> </label>
                    </div>
                  </div>
                  <div class='col-md-6 col-sm-12 col-lg-6 text-center mt-5'>
                    <div class='bg-light p-2 rounded fs-4'> 
                        <label> <em> Dato ingresado:  $ingresado </em> </label>
                    </div>
                  </div>
                  <div class='col-md-12 col-sm-12 col-lg-12 text-center mt-5 fs-3'> <em> Datos extra </em> </div>
                  <div class='col-md-6 col-sm-12 col-lg-6 text-center mt-5'>
                    <div class='bg-light p-2 rounded fs-4'>
                        <label> <em> Fecha: $fecha </em> </label>
                    </div>
                  </div>
                  <div class='col-md-6 col-sm-12 col-lg-6 text-center mt-5'>
                    <div class='bg-light p-2 rounded fs-4'>
                        <label> <em> Hora: $hora </em> </label>
                    </div>
                  </div>";


            $insertar = "INSERT INTO datos (ingresado, resultado, fecha, hora) VALUES ('{$ingresado}', {$resultado}, '{$fecha}', '{$hora}')";


            if (($result = mysqli_query($conexion, $insertar)) === false) {
                die(mysqli_error($conexion));
            }else{
                // echo " <div class='mt-5 fs-5'> <em> Datos guardados correctamente </em> </div> ";
            }
        ?>
        </div>
        
        <div class="text-center"> <a href="index.php"  class="btn btn-primary mt-5"> Calcular nuevo dato </a></div>
    </div>
</body>
</html>


