<?php 
    $telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];
    $array = '1 2 3 4';

    $separandoPorAlgo = implode( PHP_EOL, $telefones);
    $explodeComLimit = explode(' ', $array, 2);
    print_r($explodeComLimit);  
?>