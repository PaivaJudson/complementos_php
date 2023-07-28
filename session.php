<?php 

session_start();

echo "<pre>";

$_SESSION['nome'] = 'Judson Paiva';
$_SESSION['idade'] = '29';

var_dump($_SESSION);

$nome_completo = $_SESSION['nome'];
echo 'Nome: '. $nome_completo;
