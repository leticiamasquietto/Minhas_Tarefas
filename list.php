<?php
require 'db.php';

$stmt = $pdo->query("SELECT * FROM tarefas ORDER BY created_at DESC");
$tarefas = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($tarefas);
?>
