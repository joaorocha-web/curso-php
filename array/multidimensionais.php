<div class="titulo">Multidimensionais</div>

<?php
$dados = [
   "Pessoa1" => [
        "nome" => "João",
        "Idade" => 20
    ],
    "Pessoa2" =>[
        "nome" => "Bia",
        "Idade" => 22 
    ]
    ];

    print_r($dados['Pessoa1']['Idade'])

?>