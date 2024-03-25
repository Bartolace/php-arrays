<?php

$alunos2021 = [
    'Vinicius' ,
    'João' ,
    'Ana' ,
    'Roberto' ,
    'Maria' ,
];

$novosAlunos = [
  'Patricia' ,
  'Nico' ,
  'Ana' ,
  'Daiane' ,
  'Cida' ,
];

// chaves numericas serão renumeradas
  //se duas numericas forem iguais, a última será incrementada no array merge
// chaves de strings iguais: a última que será considerada
$alunos2022 = array_merge($alunos2021,$novosAlunos);
// $alunos2022 = $alunos2021 + $novosAlunos;
  // da pra mergear se houver os índices sem valor, os que tem valor seram ignorados;

//Unpaking
$mergeComSpreed = [...$alunos2021, ...$novosAlunos];

//No contexto de funções o operador ... vira Spreed, que recebe n itens de determinado tipo 
  exemploSpreed([1,2,3], [4,5,6]);
  function exemploSpreed(array ...$entradas) {
    var_dump($entradas);
  }

