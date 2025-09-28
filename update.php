<?php
require 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $stmt = $pdo->prepare("UPDATE tarefas SET status = 'concluida' WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: tarefas.php");
exit;
