<?php

require_once '../connect.php';

$id = $_GET['id'];

$query = 'DELETE  FROM users WHERE id = :id';

try {
    $stmt = $conn->prepare($query);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
} catch (PDOexception $error) {
    echo $error->getMessage();
}

header("location: ../Usuario/listar_usuarios.php");
