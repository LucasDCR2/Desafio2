<?php

function chamarAPI($cpf, $email){

// inicializa um array associativo contendo as chaves cpf e email atrelados ao que o usuario digitar
$data = array(
    'cpf' => $cpf,
    'email' => $email
);

// set da url da api
$url = 'https://ah.we.imply.com/apiCopetti';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);


$response = curl_exec($ch);

if(curl_errno($ch)){
    $error_message = curl_error($ch);
    echo 'Erro na requisição: ' . $error_message;
}


curl_close($ch);

/* $reponse armazena uma string, para acessar o valor de 'result' é preciso transformar em
    objeto stdClass */

$responseObj = json_decode($response);

// $result (objeto da classe stdClass) armazena true ou false
// true caso a pessoa esteja no cadastro --- false caso a pessoa nao esteja cadastrada
$result = $responseObj->result; 

return $result;
}