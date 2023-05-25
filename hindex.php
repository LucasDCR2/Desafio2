<?php
session_start();
$_SESSION['logged_in'] = false;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="main.css">
	<!--===============================================================================================-->
	<script src="jscript.js"></script>
</head>
<body>
	
	<div class="limiter">
		<div class="containerLogin" style="background-image: url('images/bg-01.jpg');">
			<div class="login">
				<form action="validacao.php" method="post" class="loginForm" id="loginForm" >
					<span class="loginForm-titulo ">
						Login
					</span>
					
					<div class="acima">
						<span class="txt1">
							EMAIL
						</span>
					</div>
					<div class="inputAll">
						<input class="input" type="text" id="email" placeholder="Digite seu E-mail" name="email">
						<span class="inputFoco"></span>
					</div>
					<div class="erro" id="erro-email"></div>
					
					<div class="acima">
						<span class="txt1">
							CPF
						</span>
					</div>
					

					<div class="inputAll">
						<input class="input" type="CPF" type="text" id="cpf" placeholder="Digite seu CPF" name="cpf" size="14" maxlength="14" oninput="this.value = this.value.replace(/[^-,0-9,.]/g, '');">
						<span class="inputFoco"></span>
					</div>

					<div class="erro" id="erro-cpf"></div>

					<div class="containerBTN">
						<button class="loginBTN">
							Login
						</button>
					</div>

					<div class="acessoNegado" id="acesso"></div>

				
				</form>
			</div>
		</div>
	</div>

<script src="jscript.js"></script>

</body>
</html>