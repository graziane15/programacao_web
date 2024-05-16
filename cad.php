<?php 
    include ("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = " INSERT INTO usuario(nome,email,senha)
    VALUES('$nome','$email','$senha')";

    if($sql = mysqli_query($conexao,$sql)){
        echo"cadastrado com sucesso";
    }else{
        echo "usuario nao encontrado".mysqli_connect_error($conexao);
    }

?>