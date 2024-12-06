<?php
include("./config/bd.php");

$nomeCompleto = $_POST['nomeCompleto'];
$cpf = $_POST['cpf'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$nomeEmpresa = $_POST['nomeEmpresa'];
$matriz = $_POST['matriz'];
$unidade = $_POST['unidade'];
$cnpj = $_POST['cnpj'];

// Files
$files =[
    $rgFrenteFile = $_FILES['rgFrenteFile']['tmp_name'],
    $rgVersoFile = $_FILES['rgVersoFile']['tmp_name'],
    $fotoRGFile = $_FILES['fotoRGFile']['tmp_name'],
    $cartaFile = $_FILES['cartaFile']['tmp_name'],
];

$tamanho = $_FILES['rgFrenteFile']['size'];
$tamanho = $_FILES['rgVersoFile']['size'];
$tamanho = $_FILES['fotoRGFile']['size'];
$tamanho = $_FILES['cartaFile']['size'];


if ( $files != "none") { 
    $fp = fopen($rgFrenteFile,"rb"); 
    $fp = fopen($rgVersoFile, "rb"); 
    $fp = fopen($fotoRGFile, "rb"); 
    $fp = fopen($cartaFile, "rb"); 
    $conteudo = fread($fp, $tamanho); 
    $conteudo = addslashes($conteudo); 
    fclose($fp); 

    $sql = "INSERT INTO formulario (nomeCompleto, cpf, cargo, email, nomeEmpresa, matriz, unidade, cnpj, rgFrenteFile, rgVersoFile, fotoRGFile, cartaFile)
            VALUES ('$nomeCompleto', '$cpf', '$cargo', '$email', '$nomeEmpresa', '$matriz', '$unidade', '$cnpj', 
           '$rgFrenteFile', '$rgVersoFile', '$fotoRGFile', '$cartaFile')"; 
        
    mysqli_query($conexao, $sql) or die("Algo deu errado ao inserir o registro. Tente novamente."); 

    echo 'Formulário inserido com sucesso!';   
    
    if(mysqli_affected_rows($conexao) > 0) {
        // print 'Formulário inserido com sucesso!';
        header("Location:  index.php?success=1");
    }
        // print "A imagem foi salva na base de dados."; 
    else 
        print "Não foi possível salvar a imagem na base de dados."; 

} else 
    print "Não foi possível carregar a imagem.";

?>|
