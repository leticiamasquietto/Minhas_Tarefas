# Minhas Tarefas - Desenvolvimento de Aplicações Web I

**Aluno:** Letícia Masquietto de Oliveira Silva  
**Disciplina:** Desenvolvimento de Aplicações para Web I  
**Tecnologias:** PHP (PDO), MySQL, jQuery (AJAX), Bootstrap 5

Sistema simples de lista de tarefas desenvolvido em PHP e MySQL, utilizando PDO, AJAX e Bootstrap. Permite cadastrar novas tarefas com título e descrição, listar todas as tarefas, marcar como concluídas e excluir registros. Projeto acadêmico da disciplina Desenvolvimento de Aplicações para Web I.

## Sobre
Sistema simples de lista de tarefas. Permite:
- Cadastrar nova tarefa (título + descrição)
- Listar todas as tarefas
- Marcar tarefa como concluída
- Excluir tarefas

Tudo em **uma única página** usando AJAX para operações assíncronas.

## Estrutura dos arquivos
- `index.php` — página única + endpoint AJAX (create/toggle/delete + partial HTML)
- `db.php` — conexão PDO (não versionar)
- `style.css` — estilos (tema rosa)
- `tarefas.sql` — script para criar banco/tabela

## Banco de dados
Importar `tarefas.sql` no phpMyAdmin 

CREATE TABLE IF NOT EXISTS tarefas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(140) NOT NULL,
  descricao TEXT,
  status ENUM('pendente','concluida') NOT NULL DEFAULT 'pendente',
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
