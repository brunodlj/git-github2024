<?php
require_once "conexao.php";
$conexao = conectar();

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuario (email, senha) VALUES ('$email', '$senha')";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: index.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}