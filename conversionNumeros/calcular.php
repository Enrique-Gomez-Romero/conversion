<?php 

    $op1 = $_POST['op1'];

    $op2 = $_POST['op2'];

    $entrada1 = $_POST['entrada1'];

    $resultado;

    include("conversiones.php");

    //binario

    if ($op1 == "bin" && $op2 == "dec") {
        $resultado = bin2dec($entrada1);
    }else if($op1 == "bin" && $op2 == "oct"){
       $resultado =  bin2oct($entrada1);
    }else if($op1 == "bin" && $op2 == "hexa"){
        $resultado =  bin2hexa($entrada1);

    //decimal

    }if($op1 == "dec" && $op2 == "bin"){
        $resultado =  dec2bin($entrada1);
    }else if($op1 == "dec" && $op2 == "oct"){
        $resultado =  dec2oct($entrada1);
    }else if($op1 == "dec" && $op2 == "hexa"){
        $resultado =  dec2hexa($entrada1);
    }

    //octal

    if($op1 == "oct" && $op2 == "bin"){
        $resultado =  oct2bin($entrada1);
    }else if($op1 == "oct" && $op2 == "dec"){
        $resultado =  oct2dec($entrada1);
    }else if($op1 == "oct" && $op2 == "hexa"){
        $resultado =  oct2hexa($entrada1);
    }

    //hexadecimal

    if($op1 == "hexa" && $op2 == "bin"){
        $resultado =  hexa2bin($entrada1);
    }else if($op1 == "hexa" && $op2 == "dec"){
        $resultado =  hexa2dec($entrada1);
    }else if($op1 == "hexa" && $op2 == "oct"){
        $resultado =  hexa2oct($entrada1);
    }

    include("enviar.php");
?>
