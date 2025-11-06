<!DOCTYPE html>
<html>
<head>
    <title>..:: Gerenciamento de Livros ::..</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script type="module" src="assets/js/script.js" async></script>
</head>
<body>
<div class="container">
    <h1>Lista de Livros</h1>
    <div class="filter">
        <label for="category">Categoria:</label>
        <select id="category">
            <option value="">Selecione uma categoria</option>
        </select>
    </div>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Preço</th>
            <th>Apagar</th>
        </tr>
        </thead>
        <tbody id="bookList">
        <tr book-id="2">
            <td>2</td>
            <td>Título 2</td>
            <td>100</td>
            <td><button>X</button></td>
        </tr>
        <tr book-id="3">
            <td>3</td>
            <td>Título 3</td>
            <td>150</td>
            <td><button>X</button></td>
        </tr>
        </tbody>
    </table>
</div>
<!-- Modal para editar Livro -->
<div id="edit-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Editar Livro</h2>
        <form id="edit-form">
            <input type="hidden" id="id" name="id">
            <label for="title">Título:</label>
            <input type="text" id="title" name="title">
            <label for="category_id">Categoria:</label>
            <select id="category_id" name="category_id">
                <option value="">Selecione uma Categoria</option>
            </select>
            <label for="price">Preço:</label>
            <input type="text" id="price" name="price">
            <button type="submit">Salvar</button>
        </form>
        <div id="message">Aqui conteúdo da msg</div>
    </div>
</div>
</body>
</html>
