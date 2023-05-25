<?php

function produtosAPI(){
    // URL da sua API
    $url = 'https://ah.we.imply.com/produtosCopetti';

    // Dados a serem enviados para a API (se necessário)
    $data = array(
        'param1' => 'valor1',
        'param2' => 'valor2'
    );

    // Configuração do CURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    // Envia os dados como POST, se houver
    if (!empty($data)) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }

    // Executa a requisição CURL
    $response = curl_exec($ch);

    // Verifica se houve algum erro na requisição
    if ($response === false) {
        $error = curl_error($ch);
        // Trate o erro de acordo com suas necessidades
        // por exemplo, exiba uma mensagem de erro ou registre o erro em log
        return "Erro na requisição: " . $error;
    } else {
        // Processa a resposta da API
        // Transforma de json para objeto stdClass
        $responseObj = json_decode($response);
        $result = $responseObj->result;
        return $result;
    }

    // Fecha a conexão CURL
    curl_close($ch);
}

/* 
Array
(
    [0] => stdClass Object
        (
            [dscapresentacao] => Inter x Imply
            [dthr_apresentacao] => 2019-08-07 17:17:00
            [idtipoproduto] => 1a4dd469e1c5313498bc0637b1a970eb80f375b1
            [dscproduto] => Inteira
            [preco] => 30
        )

    [1] => stdClass Object
        (
            [dscapresentacao] => Inter x Imply
            [dthr_apresentacao] => 2019-08-07 17:17:00
            [idtipoproduto] => 6cd988b7e9250a2c052d0a4701b0661990f01482
            [dscproduto] => Inteira
            [preco] => 30
        )

    [2] => stdClass Object
        (
            [dscapresentacao] => Inter x Imply
            [dthr_apresentacao] => 2019-08-07 17:17:00
            [idtipoproduto] => 4033d60f193b154242c601d0d2a665ed1fd53943
            [dscproduto] => Inteira
            [preco] => 30
        )

    [3] => stdClass Object
        (
            [dscapresentacao] => Inter x Imply
            [dthr_apresentacao] => 2019-08-07 17:17:00
            [idtipoproduto] => 9d88e2d33d8bdcf92784b6c7ee70515598072d8d
            [dscproduto] => Inteira
            [preco] => 30
        )

    [4] => stdClass Object
        (
            [dscapresentacao] => Internacional x Palmeiras
            [dthr_apresentacao] => 2020-12-30 21:30:00
            [idtipoproduto] => 8fc3f349388cc2c26e632b651824cf43b24ef5d4
            [dscproduto] => Meia
            [preco] => 10
        )

    [5] => stdClass Object
        (
            [dscapresentacao] => Internacional x Palmeiras
            [dthr_apresentacao] => 2020-12-30 21:30:00
            [idtipoproduto] => 8fc3f349388cc2c26e632b651824cf43b24ef5d4
            [dscproduto] => Inteira
            [preco] => 0
        )

    [6] => stdClass Object
        (
            [dscapresentacao] => Bruno e Marrone
            [dthr_apresentacao] => 2021-10-29 19:00:00
            [idtipoproduto] => 318c2d0b442070066e4f2e872bfc8c8ff6035542
            [dscproduto] => Inteira
            [preco] => 1
        )

    [7] => stdClass Object
        (
            [dscapresentacao] => Bruno e Marrone
            [dthr_apresentacao] => 2021-10-29 19:00:00
            [idtipoproduto] => 318c2d0b442070066e4f2e872bfc8c8ff6035542
            [dscproduto] => Produto Meia
            [preco] => 0
        )

)
*/