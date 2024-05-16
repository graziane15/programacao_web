<?php 
    include ("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = " INSERT INTO usuario(nome,email,senha)
    VALUES('$nome','$email','$senha')";

    if($conexao = mysqli_query($conexao,$consulta)){
        echo "cadastrado com sucesso";
    }else{
        echo "usuario nao encontrado";
    }

?>