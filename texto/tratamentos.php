<?php

$nome = "Gabriel Bartolace";
//o Delimitador tirar espaços da esquerda, podendo fazer a identação, funciona como as "" se cado FIM estaja entre '' vai reconhecer tudo com string
function gerarMsg(string $nome)
{ 
    $frase = <<<FIM
    Olá $nome
    FIM;

    echo $frase;
}


$texto = "Texto com qualquer palavrão caramba";

//pode substituir mais de uma vez
$substituiPalavras = str_replace(['palavrão', 'caramba'],"***", $texto);

$substituiCaracteres = strtr($texto, 'a','*');
//subscreve o valor
$substituiPalavras2 = strtr($texto, ["palavrão" => "educação"]);
echo $substituiPalavras2;