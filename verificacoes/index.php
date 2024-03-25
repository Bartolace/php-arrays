<?php
$numeros = [5, 1, 2, 8, 10];
$notas = [
  "Gabriel" => 10,
  "Vini" => 4,
  "Laura" => 8,
  "Erick" => 7,
];
//se é um array 
is_array($notas);
// se é array list (de index)
array_is_list($notas);
//verifica key
isset($notas['Gabriel']);
//verifica val
in_array(10, $numeros);
//procura por val e retorna key
array_search(10, $notas);

function exibe($val) {
  return var_dump($val);
}