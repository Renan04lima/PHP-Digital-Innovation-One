<?php

declare(strict_types=1);

$pdo = null;

try {
    $pdo = new PDO('mysql:dbname=exemploPDO', 'root', '');;
}catch (Exception $e){
    echo $e->getMessage();
    die();
}

return $pdo;