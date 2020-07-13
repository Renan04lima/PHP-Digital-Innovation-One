<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário de inscrição</title>
</head>
<body>
<p>FOMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
<form action="script.php" method="post">
    <?php
    $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
    if (!empty($mensagemDeSucesso)) {
        echo $mensagemDeSucesso;
    }
    $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
    if (!empty($mensagemDeErro)) {
        echo $mensagemDeErro;
    }
    ?>
    <p>Seu nome: <input type="text" name="nome"/></p>
    <p>Sua idade: <input type="text" name="idade"/></p>
    <p><input type="submit"/></p>
</form>
</body>
</html>
