<?php
//sort por ordem crescente e alfabética;
//  recebe um referência &, precisa ser um variável 
//    isso não funciona:
//      sort([3, 5, 2]);

//ORDENAR POR INDICE
  $notas = [5, 1, 2, 8, 10];
  $ordemCrescente = $notas;
  $ordemDecrescente = $notas;
  sort($ordemCrescente);
  rsort($ordemDecrescente);
  //var_dump($ordemCrescente);
  //var_dump($ordemDecrescente); 

//ORDENAR ARRAY ASSICIATIVO
  // para não perder o índice 
  $exames = [
    "Gabriel" => 10,
    "Vini" => 4,
    "Laura" => 8,
    "Erick" => 7,
  ];
  $examesDec = $exames;
  asort($exames); // o "a" vem de associative
  arsort($examesDec);// "r" de reverse

  //por chave 
    //ksort($exames);
    //krsort($exames);

  var_dump($exames);
  //var_dump($exames);
  //var_dump($examesDec);

//ORDENAR ARRAY MULTIDIMENCIONAL ASSOCIATIVO
  $idades = [
    ['name' => 'John', 'age' => 20],
    ['name' => 'Smith', 'age' => 18],
    ['name' => 'Adam', 'age' => 22],
  ];
  
  $idadesOrdenadas = $idades;

  usort($idadesOrdenadas, function ($idades1, $idades2) {
    return $idades1['age'] <=> $idades2['age'];
    //inverter os parâmetros vai ordenar descrescentemente;
  });
  //var_dump($idadesOrdenadas);

  //há ainda as cominações:
    //uksort
    //uasort 
