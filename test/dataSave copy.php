<?php
include("./config/bd.php");

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber os dados do formulário
    $nomeCompleto = $_POST['nomeCompleto'];
    $cpf = $_POST['cpf'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    $nomeEmpresa = $_POST['nomeEmpresa'];
    $matriz = $_POST['matriz'];
    $unidade = $_POST['unidade'];
    $cnpj = $_POST['cnpj'];

    // Verificar e carregar os arquivos
    $rgFrenteFile = !empty($_FILES['rgFrenteFile']['tmp_name']) ? file_get_contents($_FILES['rgFrenteFile']['tmp_name']) : null;
    $rgVersoFile = !empty($_FILES['rgVersoFile']['tmp_name']) ? file_get_contents($_FILES['rgVersoFile']['tmp_name']) : null;
    $fotoRGFile = !empty($_FILES['fotoRGFile']['tmp_name']) ? file_get_contents($_FILES['fotoRGFile']['tmp_name']) : null;
    $cartaFile = !empty($_FILES['cartaFile']['tmp_name']) ? file_get_contents($_FILES['cartaFile']['tmp_name']) : null;

    // Preparar a query SQL para inserção dos dados
    $sql = "INSERT INTO formulario (
                nomeCompleto, cpf, cargo, email, nomeEmpresa, matriz, unidade, cnpj,
                rgFrenteFile, rgVersoFile, fotoRGFile, cartaFile
            ) VALUES ('$nomeCompleto', '$cpf', '$cargo', '$email', '$nomeEmpresa', '$matriz', '$unidade', '$cnpj', 
           '$rgFrenteFile', '$rgVersoFile', '$fotoRGFile', '$cartaFile')";

    // Preparar a consulta
    // if ($conexao->prepare($sql)) {
    //     // Se a preparação da consulta falhar, exiba a mensagem de erro
    //     die("Erro na preparação da consulta SQL: " . $conexao->error);
    // }

    // Vincular os parâmetros (usando "s" para string e "b" para blob)
    // $stmt->bind_param(
    //     'ssssssssbbbb',
    //     $nomeCompleto,
    //     $cpf,
    //     $cargo,
    //     $email,
    //     $nomeEmpresa,
    //     $matriz,
    //     $unidade,
    //     $cnpj,
    //     $rgFrenteFile,
    //     $rgVersoFile,
    //     $fotoRGFile,
    //     $cartaFile
    // );

    // Executar a query
    if ($conexao->query($sql) === TRUE) {
        header("Location:  dataForm.php?success=1");
    } else {
        echo "Erro: " . $sql . "<br>" . $conexao->error;
    }

    // Fechar o statement e a conexão
    // $stmt->close();
    $conexao->close();

?>


<!-- VALUES ('$nomeCompleto', '$cpf', '$cargo', '$email', '$nomeEmpresa', '$matriz', '$unidade', '$cnpj', 
           '$rgFrenteFile', '$rgVersoFile', '$fotoRGFile', '$cartaFile')"; -->