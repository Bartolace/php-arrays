<?php
$mail = 'gabríelll.freitas@hotmail.com';
$nome= "Vinicius Dias Junior";
$haDiasNaStr = str_contains($nome, "Dias");
$comecaCom = str_starts_with($nome, "Vini");
$terminaCom = str_ends_with($nome, "Juncior");

$posicaoArroba = strpos($mail, '@');
$extraiStrDepois = substr($mail, $posicaoArroba);
$extraiStrAntes = substr($mail, 0, $posicaoArroba);
//o mb vem de multbit, serve para trabalhar com caracteres que ocupam mais de um bit
//precisa ativar o mb no php ini
$toUpper = mb_strtoupper($extraiStrAntes);
$toLower = mb_strtolower($extraiStrAntes);


$tamanhoStrBit = mb_strlen($mail);
$explodeSample = explode(' ', $nome); 


var_dump($explodeSample);