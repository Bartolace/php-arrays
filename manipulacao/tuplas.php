<?php
//list()
  // o default é pegar por índice numérico 
[$nome, $nota, $idade] = [ "Gabriel ", 10, 25];

$listaAssoc = [
  "nome" => "Gabriel",
  "nota"=> 5,
  "idade"=> 20,
];
// é preciso dizer qual o índice quando é associativo por strings
["nome" => $nomeAssoc, "nota" => $notaAssoc  , "idade" => $idadeAssoc] = $listaAssoc;
//var_dump($nomeAssoc, $notaAssoc, $idadeAssoc);

$contas = [
  [
      'titular' => 'Vinicius Dias',
      'saldo' => 100
  ],
  [
      'titular' => 'Maria Joaquina',
      'saldo' => 1000
  ],
  [
      'titular' => 'João da Silva',
      'saldo' => 800
  ],
];

foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
  echo "$titular possui $saldo reais" . PHP_EOL;
}

// transformando key em variáveis
  //fazer apenas para dados que confiamos
$listaToStract = [
  'apelido' => "barts",
  'altura' => 1.78,
  'peso' => 91,
];
extract($listaToStract);
//var_dump($apelido, $altura, $peso);

var_dump(compact('apelio', 'altura', 'peso'));
