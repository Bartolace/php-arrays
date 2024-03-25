<?php


//array associativos
// apenas inteiros e strings como index, caso contrário será transformado em um inteiro

$lista = [
  1 => "um",
  2=> "dois",
  3=> "tres"
];

foreach ($lista as $key => $value) {
  echo "$key em pt-br é $value" . PHP_EOL;
}

// .length() do php
echo " o count() mostra o tamanho da lista " . count($lista);