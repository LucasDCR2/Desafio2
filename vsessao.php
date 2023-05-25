<?php

session_start();

$response = array();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    $response['status'] = 'sucesso';
    $response['mensagem'] = 'Usuario autenticado';

} else if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true){
    $response['status'] = 'erro';
    $response['mensagem'] = 'Usuario nao autenticado';
} 

header('Content-Type: application/json');

echo json_encode($response);


