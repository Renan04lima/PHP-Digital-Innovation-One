<?php
session_start();


$categorias = []; // array numérico
$categorias[] = 'infantil';
$categorias[] = 'adolescentes';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias)

$nome = $_POST['nome'];// array associativo( associa a posição do array a uma chave numerica ou string)
$idade = $_POST['idade'];
if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = "O nome não pode ser vazio, por favor preencha-o novamente";
    header('location: index.php');
}

if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = "O nome deve conter mais de 3 caracteres";
    header('location: index.php');
}

if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = "O nome é muito extenso";
    header('location: index.php');
}

if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = "Informe um número para a idade.";
    header('location: index.php');
}

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
