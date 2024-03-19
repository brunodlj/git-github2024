<?php
require_once "conexao.php";
$conexao = conectar();

$id_usuario = $_POST['id_usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "UPDATE usuario SET email='$email', senha='$senha' WHERE id_usuario=$id_usuario";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: index.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}