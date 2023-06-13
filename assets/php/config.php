<?php

$dbHost = 'localhost';
$dbUsername = 'id20897539_admtgb';
$dbPassword = 'Tgb12345!';
$dbName = 'id20897539_bancotgb';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($conexao->connect_errno) 
{
    echo "Erro";
}
else
{
    echo "Conexao efetuada com sucesso.";
}

?>

