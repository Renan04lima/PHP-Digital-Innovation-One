<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias)

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);
//return 0;
if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil')
            echo "O ".$nome."pertence a categoria ".$categorias[$i];
    }

} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adolescentes')
            echo "O ".$nome." pertence a categoria ".$categorias[$i];
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O ".$nome."pertence a categoria ".$categorias[$i];
    }
}
