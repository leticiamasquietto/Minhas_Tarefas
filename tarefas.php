<?php
include 'db.php';

// Adicionar tarefa
if (!empty($_POST['titulo']) && !empty($_POST['descricao'])) {
    $stmt = $pdo->prepare("INSERT INTO tarefas (titulo, descricao) VALUES (?, ?)");
    $stmt->execute([$_POST['titulo'], $_POST['descricao']]);
    exit;
}

// Concluir tarefa
if (!empty($_POST['acao']) && $_POST['acao'] == 'concluir') {
    $stmt = $pdo->prepare("UPDATE tarefas SET status='concluida' WHERE id=?");
    $stmt->execute([$_POST['id']]);
    exit;
}

// Excluir tarefa
if (!empty($_POST['acao']) && $_POST['acao'] == 'excluir') {
    $stmt = $pdo->prepare("DELETE FROM tarefas WHERE id=?");
    $stmt->execute([$_POST['id']]);
    exit;
}

// Listar tarefas
$stmt = $pdo->query("SELECT * FROM tarefas ORDER BY criado_em DESC");
$tarefas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tarefas as $t): ?>
        <tr>
            <td><?= htmlspecialchars($t['titulo']) ?></td>
            <td><?= htmlspecialchars($t['descricao']) ?></td>
            <td>
                <?= $t['status'] == 'pendente' ? "<span class='badge bg-warning'>Pendente</span>" : "<span class='badge bg-success'>Concluída</span>" ?>
            </td>
            <td>
                <?php if ($t['status'] == 'pendente'): ?>
                    <button class="btn btn-sm btn-primary concluir" data-id="<?= $t['id'] ?>">Concluir</button>
                <?php endif; ?>
                <button class="btn btn-sm btn-danger excluir" data-id="<?= $t['id'] ?>">Excluir</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
