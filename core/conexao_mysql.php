<?php

function conecta() : mysqli
{
    $servidor = 'localhost';
    $banco = 'blog';
    $port = 3307;
    $usuario = 'root';
    $senha = "";
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $port);

    if(!$conexao){
        echo 'Erro: Não foi possível conectar ao MySql.' . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
        echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
        return null;
    }
    return $conexao;
}

function desconecta(mysqli $conexao) : void
{
    mysqli_close($conexao);
}
?>
