<?php 
    $telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];
    $array = '1 2 3 4';
    $email = ".,gabriel.freitas@hotmail.com,.";
    $anoNascimento = '1998';

    $separandoPorAlgo = implode( PHP_EOL, $telefones);
    $explodeStringEmArr = explode(' ', $array);
    $removeEspacos = trim($email);
    $removeAlgoDasPontas = trim($email, ".,");
    $apararLeft = ltrim($email, ".");
    $apararRigth = rtrim($email, ".");

    print_r($apararLeft);  
