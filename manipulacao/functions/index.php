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
$dadosEmJson = array_map(function ($item) {
    $item['pais'] = mb_convert_case($item['pais'], MB_CASE_UPPER);
    return $item;
}, $dadosEmJson);

var_dump($dadosEmJson);