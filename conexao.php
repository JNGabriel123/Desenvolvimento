<?php
$servidor = "localhost";
$usuario = "root";
$senha = "@Gabriel123";
$banco = "users";
$port = 3306;

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $port);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
