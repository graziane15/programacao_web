<?php
$host='localhost';
$user='root';
$senha='';
$bd='grazi2c';
if ($conexao = mysqli_connect($host, $user, $senha, $bd)){
//echo "conectado com sucesso";
}
else
    echo "falhou";

?>