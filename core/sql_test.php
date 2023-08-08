<?php 
    require_once '../core/sql.php';

    $id = 1;
    $nome = 'murilo';
    $email = 'murilo@gmail.com';
    $senha = '123mudar';
    $dados = [  'nome' => $nome,
                'email' => $email,
                'senha' => $senha];

    $entidade = 'usuario';
    $criterio = [['id', '=', $id]];
    $campos = ['id', 'nome', 'email'];
    print_r($dados);
    echo '<br>';
    print_r($campos);
    echo '<br>';
    print_r($criterio);
    echo '<br>';

    //teste INSERT
    $instrucao = insert($entidade, $dados);
    echo $instrucao.'<BR>';

    //teste UPDATE
    $instrucao = update($entidade, $dados, $criterio);
    echo $instrucao.'<BR>';

    //teste SELECT 
    $instrucao = select($entidade, $dados, $criterio);
    echo $instrucao.'<BR>';

    //teste DELETE
    $instrucao = delete($entidade, $criterio);
    echo $instrucao.'<BR>';
?>