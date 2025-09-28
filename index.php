<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-3 text-center">📋 Minhas Tarefas</h2>

    <!-- Formulário para adicionar tarefa -->
    <form id="form-tarefa" class="d-flex gap-2 mb-3">
        <input type="text" name="titulo" class="form-control" placeholder="Título da tarefa" required>
        <input type="text" name="descricao" class="form-control" placeholder="Descrição">
        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>

    <!-- Aqui vai aparecer a lista carregada via AJAX -->
    <div id="tarefas"></div>
</div>

<!-- Importar jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Código JavaScript AJAX -->
<script>
$(document).ready(function() {
    // Carregar lista de tarefas assim que a página abrir
    carregar();

    function carregar() {
        $("#tarefas").load("tarefas.php");
    }

    // Adicionar nova tarefa
    $("#form-tarefa").submit(function(e) {
        e.preventDefault();
        $.post("tarefas.php", $(this).serialize(), function() {
            carregar();
            $("#form-tarefa")[0].reset();
        });
    });

    // Concluir ou excluir tarefa
    $(document).on("click", ".concluir, .excluir", function() {
        let id = $(this).data("id");
        let acao = $(this).hasClass("concluir") ? "concluir" : "excluir";
        $.post("tarefas.php", {acao: acao, id: id}, function() {
            carregar();
        });
    });
});
</script>

</body>
</html>
```
