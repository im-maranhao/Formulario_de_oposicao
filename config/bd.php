<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dev');

$conexao = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

function seguranca_adm(){

	if(empty($_SESSION['usuarioToken'] )){		
		$_SESSION['loginErro'] = "Realize Novo Login - Token Expirado!";
		header("Location: index.php");
	}else {
        header("Location: adm/gerenciamento.php");
    }
	
}

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'u244070043_irtvm');
// define('DB_PASSWORD', 'T123456m');
// define('DB_NAME', 'u244070043_irtvm');