<?php
    //binario a decimal
    function bin2dec($bin){
        $dec = 0;
        $bin = bindec($bin);
        $dec = $bin;
        return $dec;
    }
    
    //binario a octal
    function bin2oct($bin){
        $oct = 0;
        $bin = bindec($bin);
        $oct = decoct($bin);
        return $oct;
    }

    //binario a hexadecimal
    function bin2hexa($bin){
        $hex = 0;
        $bin = bindec($bin);
        $hex = dechex($bin);
        return $hex;
    }

    //decimal a binario
    function dec2bin($dec){
        $bin = 0;
        $bin = decbin($dec);
        return $bin;
    }

    //decimal a octal
    function dec2oct($dec){
        $oct = 0;
        $oct = decoct($dec);
        return $oct;
    }

    //decimal a hexadecimal
    function dec2hexa($dec){
        $hex = 0;
        $hex = dechex($dec);
        return $hex;
    }

    //octal a binario
    function oct2bin($oct){
        $bin = 0;
        $oct = octdec($oct);
        $bin = decbin($oct);
        return $bin;
    }

    //octal a decimal
    function oct2dec($oct){
        $dec = 0;
        $oct = octdec($oct);
        $dec = $oct;
        return $dec;
    }

    //octal a hexadecimal
    function oct2hexa($oct){
        $hex = 0;
        $oct = octdec($oct);
        $hex = dechex($oct);
        return $hex;
    }

    //hexadecimal a binario
    function hexa2bin($hex){
        $bin = 0;
        $hex = hexdec($hex);
        $bin = decbin($hex);
        return $bin;
    }

    //hexadecimal a decimal
    function hexa2dec($hex){
        $dec = 0;
        $hex = hexdec($hex);
        $dec = $hex;
        return $dec;
    }

    //hexadecimal a octal
    function hexa2oct($hex){
        $oct = 0;
        $hex = hexdec($hex);
        $oct = decoct($hex);
        return $oct;
    }



?>