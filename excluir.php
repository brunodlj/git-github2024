<?php
require_once "conexao.php";
$conexao = conectar();

$id_usuario = $_GET['id_usuario'];

$sql = "DELETE FROM usuario WHERE id_usuario=$id_usuario";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: index.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}