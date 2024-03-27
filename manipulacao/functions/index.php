<?php

use function PHPSTORM_META\map;

$dadosEmJson = json_decode(
  '[
    {
        "pais": "Brasil",
        "medalhas": {
            "ouro": 3,
            "prata": 5,
            "bronze": 3
        }
    },
    {
        "pais": "Costa rica",
        "medalhas": {
            "ouro": 5,
            "prata": 4,
            "bronze": 4
        }
    },
    {
        "pais": "Estados unidos",
        "medalhas": {
            "ouro": 4,
            "prata": 3,
            "bronze": 5
        }
    },
    {
        "pais": "Trindade e tobago",
        "medalhas": {
            "ouro": 4,
            "prata": 3,
            "bronze": 4
        }
    }
]'
  , true);



$numeroDePaises = count($dadosEmJson);
echo "Número de países participantes: $numeroDePaises";

//Fazer com que seus nomes fiquem em letras maiúsculas;
$nomeUpper = array_map(function ($item) {
    $item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER);
    return $item;
}, $dadosEmJson);


//Ordenar: Pelo país que tiver mais medalhas de ouro

usort($dadosEmJson, function ($item1, $item2) {
    $medalhas1 = $item1['medalhas'];
    $medalhas2 = $item2['medalhas'];

    return $medalhas2['ouro'] - $medalhas1['ouro'] !== 0
        ? $medalhas2['ouro'] - $medalhas1['ouro']
        : ($medalhas2['prata'] - $medalhas1['prata'] !== 0
            ? $medalhas2['prata'] - $medalhas1['prata'] 
            : $medalhas2['bronze'] - $medalhas1['bronze']);
});

var_dump($dadosEmJson);

//Em caso de empate, pelo país que tiver mais medalhas de prata

//Em caso de empate, pelo país que tiver mais medalhas de bronze