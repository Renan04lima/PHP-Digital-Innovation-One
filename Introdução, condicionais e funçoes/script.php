<?php

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome = $_POST['nome'];// array associativo( associa a posição do array a uma chave numerica ou string)
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);

header("location: index.php");

