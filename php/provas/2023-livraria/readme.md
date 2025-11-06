# 📚 Prova 3 - Programação Web 1

## 📋 Contexto da Prova

Esta prova avalia seus conhecimentos em **desenvolvimento web full-stack** através da implementação de funcionalidades em um protótipo de sistema de gerenciamento de livraria.

**Tecnologias utilizadas:**
- 🎨 **Frontend:** HTML, CSS, JavaScript (Vanilla)
- 🔧 **Backend:** PHP com PDO
- 🗄️ **Banco de Dados:** MySQL
- 📡 **Comunicação:** Fetch API (JSON)

---

## ⚠️ Informações Importantes

### Estrutura do Projeto
```
2023-livraria/
├── index.php              # Página principal (lista de livros)
├── book-insert.php        # Inserção de novos livros
├── user-insert.php        # Cadastro de usuários
├── api/
│   ├── connection.php     # Conexão com banco de dados
│   ├── books-by-category.php  # Buscar livros por categoria
│   ├── book-update.php    # Atualizar livro
│   └── book-delete.php    # Remover livro
└── assets/
    ├── css/
    │   └── styles.css     # Estilos da aplicação
    └── js/
        └── script.js      # Lógica JavaScript principal
```

### Pontuação
- **Total:** 10,5 pontos
- **Questão 1:** 3,5 pontos
- **Questão 2:** 3,5 pontos  
- **Questão 3:** 3,5 pontos

### Observações
- ✅ A conexão com o banco de dados já está implementada em `api/connection.php`
- ✅ O layout HTML e CSS estão prontos
- ⚠️ Você deve implementar **apenas** o que é pedido em cada questão
- 📝 Todas as mensagens de erro/sucesso devem ser exibidas em formato JSON
- 🔒 Utilize **query statements** do PDO para enviar as querys para o BD

---

## 📌 Questão 1 (3,5 PONTOS) - Exibição Categorizada de Livros

### 🎯 Objetivo
Implementar a **filtragem de livros por categoria**, exibindo apenas os livros da categoria selecionada pelo usuário.

### 📂 Arquivos a serem editados
- `assets/js/script.js`
- `api/books-by-category.php`

### 📝 Descrição
No arquivo `index.php` existe um `<select>` HTML com categorias. Quando o usuário alterar a categoria selecionada, os livros devem ser buscados do banco de dados via requisição **AJAX** e exibidos dinamicamente na tabela.

### 🔧 Implementação JavaScript (`assets/js/script.js`)

Você deve:
1. Capturar o evento `change` do select de categoria
2. Fazer uma requisição **GET** para `api/books-by-category.php?categoryId={id}`
3. Receber a lista de livros em formato JSON
4. Limpar a tabela atual (`<tbody id="bookList">`)
5. Inserir dinamicamente as linhas dos livros retornados

**Estrutura de cada linha:**
```html
<tr book-id="{id}">
    <td>{id}</td>
    <td>{title}</td>
    <td>{price}</td>
    <td><button>X</button></td>
</tr>
```

### 🔧 Implementação PHP (`api/books-by-category.php`)

Você deve:
1. Receber o `categoryId` via **GET**
2. Executar a query SQL (utilize prepared statements):

```sql
SELECT id, title, price, category_id 
FROM books 
WHERE category_id = :categoryId
ORDER BY title ASC
```

3. Retornar os dados em formato JSON:

```json
{
    "type": "success",
    "message": "Lista de Livros!",
    "books": [
        {
            "id": 1,
            "title": "Clean Code",
            "price": "120.00",
            "category_id": 2
        },
        {
            "id": 2,
            "title": "Design Patterns",
            "price": "95.50",
            "category_id": 2
        }
    ]
}
```

**Em caso de erro:**
```json
{
    "type": "error",
    "message": "Erro ao buscar livros"
}
```

---

## 📌 Questão 2 (3,5 PONTOS) - Edição de Livro

### 🎯 Objetivo
Implementar a **edição de livros** através de uma modal, permitindo atualizar título, categoria e preço.

### 📂 Arquivos a serem editados
- `assets/js/script.js`
- `api/book-update.php`

### 📝 Descrição
Ao clicar em qualquer linha da tabela de livros, uma **modal** deve ser aberta com os dados do livro preenchidos em um formulário. O usuário pode editar e salvar as alterações.

### 🔧 Implementação JavaScript (`assets/js/script.js`)

**Parte 1: Abrir modal com dados do livro**
1. Capturar o clique na linha da tabela (`<tr>`)
2. Buscar os dados do livro da linha clicada
3. Preencher os campos do formulário na modal:
   - `#id` (hidden)
   - `#title`
   - `#category_id`
   - `#price`
4. Exibir a modal (`#edit-modal`)

**Parte 2: Salvar alterações**
1. Capturar o submit do formulário de edição (`#edit-form`)
2. Fazer requisição **POST** para `api/book-update.php`
3. Enviar todos os campos do formulário
4. Exibir a mensagem retornada em `<div id="message">`
5. Se sucesso, atualizar a linha da tabela com os novos dados
6. Fechar a modal após salvar

### 🔧 Implementação PHP (`api/book-update.php`)

Você deve:

1. Receber os dados via **POST**:
   - `id`
   - `title`
   - `category_id`
   - `price`

2. **Validar** se todos os campos foram preenchidos:

```php
if(empty($id) || empty($title) || empty($category_id) || empty($price)) {
    // Retornar erro
}
```

**Resposta de validação:**
```json
{
    "type": "error",
    "message": "Preencha todos os campos"
}
```

3. Executar a query de atualização (prepared statements):

```sql
UPDATE books 
SET title = :title, 
    category_id = :category_id, 
    price = :price 
WHERE id = :id
```

4. Retornar sucesso:

```json
{
    "type": "success",
    "message": "Livro atualizado com sucesso"
}
```

**Em caso de erro no banco:**
```json
{
    "type": "error",
    "message": "Erro ao atualizar livro"
}
```

### 📋 Fluxo Completo da Questão 2

```
1. Usuário clica na linha do livro
   ↓
2. Modal abre com dados preenchidos
   ↓
3. Usuário edita e clica em "Salvar"
   ↓
4. JavaScript envia dados via POST
   ↓
5. PHP valida os campos
   ↓
6. PHP atualiza no banco de dados
   ↓
7. PHP retorna JSON de sucesso/erro
   ↓
8. JavaScript exibe mensagem na modal
   ↓
9. Se sucesso: atualiza tabela e fecha modal
```

---

## 📌 Questão 3 (3,5 PONTOS) - Remoção de Livro

### 🎯 Objetivo
Implementar a **exclusão de livros** do banco de dados e da interface.

### 📂 Arquivos a serem editados
- `assets/js/script.js`
- `api/book-delete.php`

### 📝 Descrição
Quando o usuário clicar no botão **X** de uma linha da tabela, o livro deve ser removido tanto do banco de dados quanto da tabela visualmente.

### 🔧 Implementação JavaScript (`assets/js/script.js`)

Você deve:
1. Capturar o clique no botão X (`<button>` dentro da coluna "Apagar")
2. Obter o `id` do livro (atributo `book-id` da linha `<tr>`)
3. **(Opcional mas recomendado)** Confirmar com o usuário:
   ```javascript
   if(!confirm('Deseja realmente excluir este livro?')) {
       return;
   }
   ```
4. Fazer requisição **POST** para `api/book-delete.php`
5. Enviar o `id` do livro
6. Se sucesso, remover a linha da tabela visualmente
7. **(Opcional)** Exibir mensagem de confirmação

### 🔧 Implementação PHP (`api/book-delete.php`)

Você deve:

1. Receber o `id` via **POST**

2. Validar se o `id` foi enviado:

```php
if(empty($id)) {
    // Retornar erro
}
```

**Resposta de validação:**
```json
{
    "type": "error",
    "message": "ID do livro não informado"
}
```

3. Executar a query de exclusão (prepared statements):

```sql
DELETE FROM books WHERE id = :id
```

4. Retornar sucesso:

```json
{
    "type": "success",
    "message": "Livro removido com sucesso"
}
```

**Em caso de erro no banco:**
```json
{
    "type": "error",
    "message": "Erro ao remover livro"
}
```

### ⚠️ Importante
- Evite usar `preventDefault()` sem necessidade
- Remova a linha da tabela **somente após** confirmação do backend
- O botão X está dentro de um `<td>`, capture o evento corretamente

---

## 🗄️ Estrutura do Banco de Dados

### Tabela: `books`
```sql
CREATE TABLE books (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    category_id INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
```

### Tabela: `categories`
```sql
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL
);
```

---

## 📊 Tabela Resumo das Questões

| Questão | Pontos | Método HTTP | Endpoint | Ação Principal |
|---------|--------|-------------|----------|----------------|
| **1** | 3,5 | GET | `api/books-by-category.php` | Listar livros por categoria |
| **2** | 3,5 | POST | `api/book-update.php` | Atualizar dados do livro |
| **3** | 3,5 | POST | `api/book-delete.php` | Remover livro |

---

## 🔍 Exemplo de Uso do Fetch API

### GET Request (Questão 1)
```javascript
fetch(`api/books-by-category.php?categoryId=${categoryId}`)
    .then(response => response.json())
    .then(data => {
        if(data.type === 'success') {
            // Processar data.books
        } else {
            // Exibir data.message
        }
    })
    .catch(error => console.error('Erro:', error));
```

### POST Request (Questões 2 e 3)
```javascript
const formData = new FormData(form);

fetch('api/book-update.php', {
    method: 'POST',
    body: formData
})
    .then(response => response.json())
    .then(data => {
        if(data.type === 'success') {
            // Sucesso
        } else {
            // Erro
        }
    })
    .catch(error => console.error('Erro:', error));
```

---

## ✅ Checklist de Implementação

### Questão 1
- [ ] Evento `change` no select capturado
- [ ] Requisição GET implementada
- [ ] Query SQL com prepared statement
- [ ] Dados retornados em JSON
- [ ] Tabela atualizada dinamicamente
- [ ] Tratamento de erros

### Questão 2
- [ ] Clique na linha abre modal
- [ ] Campos preenchidos com dados do livro
- [ ] Submit do formulário capturado
- [ ] Validação de campos vazios
- [ ] Query UPDATE com prepared statement
- [ ] Mensagem exibida em `#message`
- [ ] Tabela atualizada após salvar
- [ ] Modal fecha após sucesso

### Questão 3
- [ ] Clique no botão X capturado
- [ ] ID do livro obtido corretamente
- [ ] Confirmação do usuário (opcional)
- [ ] Requisição POST implementada
- [ ] Query DELETE com prepared statement
- [ ] Linha removida da tabela após sucesso
- [ ] Tratamento de erros

---

## 🎓 Dicas Importantes

### JavaScript
- Use `document.querySelector()` para selecionar elementos
- Use `addEventListener()` para capturar eventos
- Lembre-se de usar `.preventDefault()` em submits de formulários
- Para atualizar a tabela, use `.innerHTML` ou `.insertAdjacentHTML()`
- Não esqueça de fechar a modal após salvar com sucesso

### PHP
- Sempre use **prepared statements** para prevenir SQL Injection
- Valide todos os dados recebidos via POST/GET
- Use `filter_input()` ou `filter_input_array()` para sanitizar
- Sempre retorne JSON: `echo json_encode($response);`
- Configure headers se necessário: `header('Content-Type: application/json')`

### PDO
```php
$stmt = $conn->prepare($query);
$stmt->bindParam(':param', $value);
$stmt->execute();
```

### Debugging
- Use `console.log()` no JavaScript para debugar
- Use `var_dump()` ou `print_r()` no PHP (remova antes de entregar)
- Verifique o Network tab no DevTools do navegador

---

## 📞 Ajuda

**Em caso de dúvidas:**
1. Leia atentamente as instruções de cada questão
2. Verifique os exemplos de código fornecidos
3. Consulte a estrutura do banco de dados
4. Teste cada funcionalidade isoladamente

---

**Boa prova! 🚀**

> _Lembre-se: organize seu código, comente quando necessário e teste todas as funcionalidades antes de entregar._ 
