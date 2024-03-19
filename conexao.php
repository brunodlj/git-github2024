<?php

function conectar()
{
    $conexao = mysqli_connect("localhost", "root", "", "git");
    if ($conexao == false) {
        die("Erro ao conectar a base de dados! " .
            mysqli_connect_errno() . ": " .
            mysqli_connect_error());
    }

    return $conexao;
}