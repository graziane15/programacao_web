<?php 

$servidor ="localhost";
$usuario ="root";
$senha ="";
$banco ="cad";

if($conexao = mysqli_connect($servidor,$usuario,$senha,$banco)){

   // echo"deu certo";
}else
{
    //echo"deu errado";
}

?>