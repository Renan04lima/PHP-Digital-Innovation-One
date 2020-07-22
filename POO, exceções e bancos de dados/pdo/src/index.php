<?php

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']){
    case 'list':
        $sql = 'select * from produtos';

        echo '<h3>Produtos: </h3>';

        foreach ($produto->list() as $value) {
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
        break;

    case 'insert':
        $status = $produto->insert('Calç');
        if(!$status){
            echo "Nao foi possivel executar a operaçao";
            return false;
        }
        echo "Registro inserido com sucesso!";
        break;

    case 'update':
        $status = $produto->update('Calça', 3);
        if(!$status){
            echo "Nao foi possivel executar a operaçao";
            return false;
        }
        echo "Registro alterado com sucesso!";
        break;

    case 'delete':
        $status = $produto->delete('Calça', 3);
        if(!$status){
            echo "Nao foi possivel executar a operaçao";
            return false;
        }
        echo "Registro removido com sucesso!";
        break;

}