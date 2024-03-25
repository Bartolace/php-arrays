<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,
];
//compara valores
array_diff($notasBimestre1, $notasBimestre2);
//compara keys
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
//compara keys e values
array_diff_assoc($notasBimestre1, $notasBimestre2);

$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

//precisam ter o mesmo tamanho
array_combine($nomesAlunos, $notasAlunos);
//inverte
array_flip($alunosFaltantes);


