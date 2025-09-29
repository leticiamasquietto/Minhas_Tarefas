# Minhas Tarefas - Desenvolvimento de Aplicações Web I

**Acadêmica:** Letícia Masquietto de Oliveira Silva  
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

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(140) NOT NULL,
  `descricao` text DEFAULT NULL,
  `status` enum('pendente','concluida') DEFAULT 'pendente',
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TELA DO TRABALHO MINHAS_TAREFAS

Nesta primeira imagem, é a tela (única) mostrando as opções solicitadas no trabalho.
![TelaComTodasAsOpcoes](https://github.com/user-attachments/assets/63184d32-2fd1-4d3f-a823-8eb2e6d06bab)


