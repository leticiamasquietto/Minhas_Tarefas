<?php
require 'db.php';

$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';

if (trim($title) === '' || strlen($title) > 140) {
    http_response_code(400);
    echo "Título inválido";
    exit;
}

$stmt = $pdo->prepare("INSERT INTO tarefas (title, description) VALUES (?, ?)");
$stmt->execute([$title, $description]);

echo "OK";
?>
