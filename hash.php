<?php
include("conexao.php");
function gerashash($senha){
    $hash=password_hash($senha,PASSWORD_DEFAULT);
    return $hash;
}
?>