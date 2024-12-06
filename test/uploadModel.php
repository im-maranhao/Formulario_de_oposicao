<?php
include_once 'conecta.php';

$nome = $_POST['NomeAluno'];
$idade = $_POST['IdadeAluno'];

$imagem = $_FILES['image']['tmp_name']; 
$tamanho = $_FILES['image']['size']; 
//$tipo = $_FILES['image']['type']; 
//$nomeImagem = $_FILES['image']['name'];

if ( $imagem != "none" ) { 
    $fp = fopen($imagem, "rb"); 
    $conteudo = fread($fp, $tamanho); 
    $conteudo = addslashes($conteudo); 
    fclose($fp); 

    $sql = "INSERT INTO contatos (nome, idade, imagem) values ('$nome', '$idade', '$conteudo')";

    mysqli_query($conexao, $sql) or die("Algo deu errado ao inserir o registro. Tente novamente."); 

    echo 'Registro inserido com sucesso!'; 

    // header("Location:  cadastrar.php?success=1");

    if(mysqli_affected_rows($conexao) > 0) 
        // print "A imagem foi salva na base de dados."; 
        header("Location:  img.php?success=1");
    else 
        print "Não foi possível salvar a imagem na base de dados."; 

} else 
    print "Não foi possível carregar a imagem.";
?>|