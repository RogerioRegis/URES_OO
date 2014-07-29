<?php

$dsn = 'pgsql:host=localhost; dbname=sicaes';
$user = 'sicaes';
$password = 'sicaes';
try {
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}