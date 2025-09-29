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

## TELA DO TRABALHO MINHAS_TAREFAS

Nesta primeira imagem, é a tela (única) mostrando as opções solicitadas no trabalho.
![TelaComTodasAsOpcoes](https://github.com/user-attachments/assets/63184d32-2fd1-4d3f-a823-8eb2e6d06bab)

Já aqui, adicionei um título aleatório e uma descrição para "provar" que foram adicionados.
![AdicioneiTitulo_Descricao](https://github.com/user-attachments/assets/78922d11-9510-425d-b419-fa1fa5f36e9a)

Logo após, o título e a descrição adicionadas que estavam com o status pendente, mudou para concluído, após ter clicado no botão "CONCLUIR".
![SelecioneiComoConcluido](https://github.com/user-attachments/assets/eca9226f-2560-4e02-bb9e-39bcbefeca7b)

Depois disso, adicionei mais um título e uma descrição aleatória, para mostrar que posso colocar mais do que apenas um título e descrição.
![AdicioneiMaisTitulo_Descricao](https://github.com/user-attachments/assets/b6e8bde2-c038-4fc7-b60e-d3885ba3af64)

Dessa forma, depois de ter posto o último título e descrição, o apaguei. Deixando então, apenas o primeiro.
![ApagueiUltimoAdicionado](https://github.com/user-attachments/assets/0e455bf1-69e7-43cf-b057-14484ec39232)






