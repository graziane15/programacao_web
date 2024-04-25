<?php

    include "conexao.php" ;

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT);

    $sql = mysqli_query($conexao, "INSERT INTO cadastro(nome,endereco,telefone,data,email,senha)
    VALUES('$nome','$endereco','$telefone','$data','$email','$senha')");

    if($sql = mysqli_query($conexao,$sql)){
        echo"$nome cadastrado com sucesso";

        
    }
    else{

        echo"usuario nao encontrado";
    }


?>
