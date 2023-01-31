<?php 

    $op1 = $_POST['op1'];

    $op2 = $_POST['op2'];

    $entrada1 = $_POST['entrada1'];

    $resultado;


    // echo "<br/> &nbsp; DATOS RECIBIDOS" . $op1;

    // echo "<br/> &nbsp; DATOS RECIBIDOS" . $op2;

    // echo "<br/> &nbsp; DATOS RECIBIDOS" . $entrada1;
    include("conversiones.php");

    //binario

    if ($op1 == "bin" && $op2 == "dec") {
        echo "<br/> &nbsp; Resultado: " . $resultado = bin2dec($entrada1);
    }else if($op1 == "bin" && $op2 == "oct"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  bin2oct($entrada1);
    }else if($op1 == "bin" && $op2 == "hexa"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  bin2hexa($entrada1);

    //decimal

    }if($op1 == "dec" && $op2 == "bin"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  dec2bin($entrada1);
    }else if($op1 == "dec" && $op2 == "oct"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  dec2oct($entrada1);
    }else if($op1 == "dec" && $op2 == "hexa"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  dec2hexa($entrada1);
    }

    //octal

    if($op1 == "oct" && $op2 == "bin"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  oct2bin($entrada1);
    }else if($op1 == "oct" && $op2 == "dec"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  oct2dec($entrada1);
    }else if($op1 == "oct" && $op2 == "hexa"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  oct2hexa($entrada1);
    }

    //hexadecimal

    if($op1 == "hexa" && $op2 == "bin"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  hexa2bin($entrada1);
    }else if($op1 == "hexa" && $op2 == "dec"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  hexa2dec($entrada1);
    }else if($op1 == "hexa" && $op2 == "oct"){
        echo "<br/> &nbsp; Resultado: " . $resultado =  hexa2oct($entrada1);
    }

    include("enviar.php");
?>
