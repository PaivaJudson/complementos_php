<?php 

session_start();

echo "<pre>";

$_SESSION['nome'] = 'Judson Paiva';
$_SESSION['idade'] = '29';

var_dump($_SESSION);

$nome_completo = $_SESSION['nome'];
$idade = $_SESSION['idade'];

echo 'Nome: '. $nome_completo . ' Idade: ' . $idade;

session_destroy();

echo "<br />";
echo 'Nome: ' . $nome_completo . ' Idade: ' . $idade;
