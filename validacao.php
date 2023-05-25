<?php

require_once('functionValidaCPF.php');
require_once('functionValidaAPI.php');

session_start();
$_SESSION['logged_in'] = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // define as variáveis de entrada
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
   
    if ((empty($email) || (!filter_var($email, FILTER_VALIDATE_EMAIL) && $email != null))) {
        if (empty($email)) {
            echo ('Por favor, preencha o campo email');
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) && $email != null) {
            echo ('Insira um email válido');
        }
        
    } else if (empty($cpf) || (validaCPF($cpf) == false && $cpf != null)) {
        if (empty($cpf)) {
            echo ('Por favor, preencha o campo CPF');
        } 
        
        if (validaCPF($cpf) == false && $cpf != null) {
            echo ('Insira um CPF existente');
        }
    } else {
        if(chamarAPI($_POST['cpf'], $_POST['email']) == true) {
            echo('Acesso permitido');
            $_SESSION['logged_in'] = true;
    
        }
        if(chamarAPI($_POST['cpf'], $_POST['email']) == false) {
            echo('Acesso negado');
            $_SESSION['logged_in'] = false;
        } 
    }
}