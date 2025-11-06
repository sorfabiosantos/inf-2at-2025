# Prova 3 - Programação Web 1

As questões envolvem um protótipo de uma Livraria rudimentar. 

## Questão 1 (3,5 PONTOS) - Exibição Categorizada - index.php, assets/js/script-search-movies.js, api/books-by-category.php
No script index.php (da raiz), os livros devem aparecer filtrados por Categoria, ou seja, conforme o usuário altera a categoria no SELECT HTML, os livros devem ser exibidos de acordo com a categoria selecionada `assets/js/script-search-movies.js`;

## Questão 2 (3,5 PONTOS) - Alteração do Livro - index.php, assets/js/script-search-movies.js, api/book-update.php
Ao clicar na linha de um livro, seus detalhes devem ser mostrados em um formulário para edição das informações na modal já codificada no `index.php`; 
Todos os campos do formulário devem ser preenchidos, caso contrário, um json contendo a seguinte mensagem deve ser exibida em div="message" na modal:

```json
{
    "type": "error",
    "message": "Preencha todos os campos"
}
```
Caso os dodos do livro sejam gravados corretamente a um json no seguinte formato deve ser retornado e a mensagem exibida em div=message:

```json
{
    "type": "success",
    "message": "Livro atualizado com sucesso"
}
```

## Questão 3 (3,5 PONTOS) - Remoção do Livro - index.php, assets/js/script-search-movies.js, api/book-delete.php

Quando o usuário pressionar o botão X, o livro deve ser removido da lista e do banco de dados. 
