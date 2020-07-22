<?php

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'insert into produtos(descricao) values(?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']); // protege de SQL injection
$prepare->execute();

echo $prepare->rowCount();
