<?php

require_once("functionProdutosAPI.php");

$var = produtosAPI();

$apre0 = $var[0]->dscapresentacao;        // inter x imply
$data0 = $var[0]->dthr_apresentacao;
$dataInicio0 = $var[0]->dthr_ini_exibicao;
$dataFim0 = $var[0]->dthr_fim_exibicao;
$ingresso0 = $var[0]->dscproduto;
$preco0 = $var[0]->preco;


$apre4 = $var[4]->dscapresentacao;         // inter x palmeiras
$data4 = $var[4]->dthr_apresentacao;
$dataInicio4 = $var[4]->dthr_ini_exibicao;
$dataFim4 = $var[4]->dthr_fim_exibicao;
$ingresso4 = $var[4]->dscproduto;
$preco4 = $var[4]->preco;
$ingresso5 = $var[5]->dscproduto;
$preco5 = $var[5]->preco;

$apre6 = $var[6]->dscapresentacao;          // bruno e marrone
$data6 = $var[6]->dthr_apresentacao;
$dataInicio6 = $var[6]->dthr_ini_exibicao;
$dataFim6 = $var[6]->dthr_fim_exibicao;
$ingresso6 = $var[6]->dscproduto;
$preco6 = $var[6]->preco;
$ingresso7 = $var[7]->dscproduto;
$preco7 = $var[7]->preco;

$dados = [
    'apre0' => $apre0,
    'data0' => $data0,
    'dataInicio0' => $dataInicio0,
    'dataFim0' => $dataFim0,
    'ingresso0' => $ingresso0,
    'preco0' => "R$" . " " . $preco0,

    'apre4' => $apre4,
    'data4' => $data4,
    'dataInicio4' => $dataInicio4,
    'dataFim4' => $dataFim4,
    'ingresso4' => $ingresso4,
    'preco4' => "R$" . " " . $preco4,
    'ingresso5' => $ingresso5,
    'preco5' => "R$" . " " . $preco5,

    'apre6' => $apre6,
    'data6' => $data6,
    'dataInicio6' => $dataInicio6,
    'dataFim6' => $dataFim6,
    'ingresso6' => $ingresso6,
    'preco6' => "R$" . " " . $preco6,
    'ingresso7' => $ingresso7,
    'preco7' => "R$" . " " . $preco7
];

$dadosJson = json_encode($dados);
header('Content-Type: application/json');
echo $dadosJson;



/*
Array
(
    [0] => stdClass Object
        (
            [dscapresentacao] => Inter x Imply
            [dthr_apresentacao] => 07/08/2019 17:00
            [dthr_ini_exibicao] => 16/07/2019 08:00
            [dthr_fim_exibicao] => 30/09/2019 00:00
            [dscproduto] => Inteira
            [info_acesso] => 
            [preco] => 30
        )

    [1] => stdClass Object
        (
            [dscapresentacao] => Inter x Imply
            [dthr_apresentacao] => 07/08/2019 17:00
            [dthr_ini_exibicao] => 16/07/2019 08:00
            [dthr_fim_exibicao] => 30/09/2019 00:00
            [dscproduto] => Inteira
            [info_acesso] => 
            [preco] => 30
        )

    [2] => stdClass Object
        (
            [dscapresentacao] => Inter x Imply
            [dthr_apresentacao] => 07/08/2019 17:00
            [dthr_ini_exibicao] => 16/07/2019 08:00
            [dthr_fim_exibicao] => 30/09/2019 00:00
            [dscproduto] => Inteira
            [info_acesso] => 
            [preco] => 30
        )

    [3] => stdClass Object
        (
            [dscapresentacao] => Inter x Imply
            [dthr_apresentacao] => 07/08/2019 17:00
            [dthr_ini_exibicao] => 16/07/2019 08:00
            [dthr_fim_exibicao] => 30/09/2019 00:00
            [dscproduto] => Inteira
            [info_acesso] => 
            [preco] => 30
        )

    [4] => stdClass Object
        (
            [dscapresentacao] => Internacional x Palmeiras
            [dthr_apresentacao] => 30/12/2020 21:00
            [dthr_ini_exibicao] => 01/01/2020 00:00
            [dthr_fim_exibicao] => 31/12/2021 23:00
            [dscproduto] => Meia
            [info_acesso] => 
            [preco] => 10
        )

    [5] => stdClass Object
        (
            [dscapresentacao] => Internacional x Palmeiras
            [dthr_apresentacao] => 30/12/2020 21:00
            [dthr_ini_exibicao] => 01/01/2020 00:00
            [dthr_fim_exibicao] => 31/12/2021 23:00
            [dscproduto] => Inteira
            [info_acesso] => 
            [preco] => 0
        )

    [6] => stdClass Object
        (
            [dscapresentacao] => Bruno e Marrone
            [dthr_apresentacao] => 29/10/2021 19:00
            [dthr_ini_exibicao] => 01/09/2021 00:00
            [dthr_fim_exibicao] => 28/02/2022 23:00
            [dscproduto] => Inteira
            [info_acesso] => 
            [preco] => 1
        )

    [7] => stdClass Object
        (
            [dscapresentacao] => Bruno e Marrone
            [dthr_apresentacao] => 29/10/2021 19:00
            [dthr_ini_exibicao] => 26/09/2021 00:00
            [dthr_fim_exibicao] => 30/10/2021 00:00
            [dscproduto] => Produto Meia
            [info_acesso] => 
            [preco] => 0
        )

)

*/