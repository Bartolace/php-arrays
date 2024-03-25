<?php

$alunos2021 = [
  'Vinicius' ,
  'João' ,
  'Ana' ,
  'Roberto' ,
  'Maria' ,
];
// adiciona elementos e retorna o numero de itens
array_push($alunos2021, 'Gabriel', 'Denis');
$alunos2021[] = 'Luiz';

//Adicona no primeiro espaço
array_unshift($alunos2021,'Estefani');

//Remove o primeiro item
echo array_shift($alunos2021) . PHP_EOL;

//Remove o último elemento e retorna
echo array_pop( $alunos2021 ) . PHP_EOL;

var_dump($alunos2021);