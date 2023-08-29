<?php
    require_once '../includes/funcoes.php';
    require_once '../core/conexao_mysql.php';
    require_once '../core/sql.php';
    require_once '../core/mysql.php';

    insert_teste(10, 'muito bom', 1, 2, date('Y-m-d H:i:s'));
    insert_teste(10, 'pessimo', 2, 1, date('Y-m-d H:i:s'));
    insert_teste(10, 'pessimo', 2, 1, date('Y-m-d H:i:s'));
    buscar_teste();
    update_teste(1, 8, 'bom', 1, 1, date('Y-m-d H:i:s'));
    deleta_teste(1);
    buscar_teste();

    function insert_teste($nota, $comentario, $usuario_id, $post_id, $data_criacao) : void
    {
        $dados = ['nota' => $nota
                , 'comentario' => $comentario
                , 'usuario_id' => $usuario_id
                , 'post_id' => $post_id
                , 'data_criacao' => $data_criacao];
        insere('avaliacao', $dados);
    }

    function buscar_teste() : void
    {
        $avaliacoes = buscar('avaliacao', ['id', 'nota', 'comentario', 'usuario_id', 'post_id', 'data_criacao'], [],'');
        print_r($avaliacoes);
    }

    function update_teste($id, $nota, $comentario, $usuario_id, $post_id, $data_criacao) : void
    {
        $dados = ['nota' => $nota
                , 'comentario' => $comentario
                , 'usuario_id' => $usuario_id
                , 'post_id' => $post_id
                , 'data_criacao' => $data_criacao];
        $criterio = [['id', '=', $id]];
        atualiza('avaliacao', $dados, $criterio);
    }
    function deleta_teste($id) : void
    {
        $criterio = [['id', '=', $id]];
        deleta('avaliacao', $criterio);
    }
?>