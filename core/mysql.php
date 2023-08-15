<?php 
function insere (string $entidade, array $dados) : boolval
{
    $retorno = false;

    foreach ($dados as $campo => $dado){
        $coringa[$campo] = '?';
        $tipo[] = gettype($dado)[0];
        $campo = $dado;
    }

    $instrucao = insert($entidade, $coringa);

    $conexao = conecta();

    $stmt = mysqli_prepare($conexao, $instrucao);

    eval('mysqli_stmt_bind_param($stmt, \'' . implode('', $tipo) . '\',$' . implode(', $', array_keys($dados)) . ');');

    
}