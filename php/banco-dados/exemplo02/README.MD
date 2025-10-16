# Exercício — Carregar categorias do banco de dados nos selects

Este exercício orienta você a preencher, a partir do banco de dados, os selects abaixo que já existem nas páginas do módulo:

- Select de inserção de produto:
  ```html
  <select id="categoryInsertSelect" name="categoryId" required></select>
  ```
- Select de filtro na listagem de produtos:
  ```html
  <select id="categoryFilter" name="categoria"></select>
  ```

Os dados devem vir do banco via um endpoint PHP em `api/categories-list.php`.

Observação importante de padrão: a programação (nomes de variáveis, ids, atributos `name`, chaves de JSON) deve estar em inglês. O que o usuário vê (textos, rótulos, mensagens) deve estar em português.

---

## Objetivo

- Ler as categorias da base de dados e popular ambos os selects na interface.
- Garantir que o select de inserção seja obrigatório e comece com a opção “Selecione uma categoria…”.
- Não duplicar código entre telas; prefira funções reutilizáveis no JS.

## Arquivos envolvidos

- Front-end (sem alterar o HTML estrutural, apenas popular via JS):
  - `products-insert.html`: contém o select `#categoryInsertSelect`.
  - `products-list.html`: contém o select `#categoryFilter`.
  - `assets/js/` (você pode centralizar a busca em `app.js` e chamar nos demais scripts, se já existir esse padrão no projeto).
- Back-end (PHP):
  - `api/categories-list.php`: retorna as categorias a partir do banco.
  - `api/connect.php`: conexão com o banco (já existente no projeto).

## Contrato da API — `GET api/categories-list.php`

- Método: `GET`
- Resposta esperada (JSON):
  ```json
  {
    "type": "success",
    "message": "Categorias encontradas",
    "data": [
      { "id": 1, "name": "Eletrônicos" },
      { "id": 2, "name": "Eletrodomésticos" },
      { "id": 3, "name": "Moda" }
    ]
  }
  ```
- Em caso de erro:
  ```json
  { 
  "type": "error", 
  "error": "Mensagem de erro" 
  }
  ```

Regras:
- Campos no JSON em inglês (`id`, `name`).
- Ordene por nome no SQL para exibir em ordem alfabética.

## Acessibilidade e UX

- Inicie os selects com uma opção guia (desabilitada/selecionada):
  - Inserção: “Selecione uma categoria…” (obrigatória, `required`).
  - Filtro: “Todas as categorias” (selecionada por padrão), seguida das opções vindas do banco.
- Garanta estados de erro amigáveis ao usuário (ex.: exibir um toast, se já existir utilitário `toast.js`).

## Passo a passo (resumo)

1) Banco de dados
- Garanta que a tabela de categorias existe e tem dados de exemplo.
- Campos mínimos: `id` (PK), `name` (nome da categoria).

2) Back-end — `api/categories-list.php`
- Inclua `connect.php`.
- Faça uma consulta segura: `SELECT id, name FROM categories ORDER BY name;`.
- Retorne JSON com `Content-Type: application/json; charset=UTF-8`.
- Em erro, responda `success: false` com uma mensagem genérica e status HTTP adequado (ex.: 500).

3) Front-end — Popular os selects
- Ao carregar cada página:
  - Busque `GET api/categories-list.php`.
  - Monte as `<option>` usando os pares `value=id` e texto visível em português (`name`).
  - Insira a opção guia antes das categorias:
    - Inserção: `<option value="" disabled selected>Selecione uma categoria…</option>`
    - Filtro: `<option value="">Todas as categorias</option>`
- Trate erros de rede/parse (ex.: exibir um toast “Não foi possível carregar as categorias”).

## Critérios de aceite

- [ ] `#categoryInsertSelect` é preenchido com as categorias do banco e possui a opção “Selecione uma categoria…” como primeira, desabilitada e selecionada.
- [ ] `#categoryFilter` é preenchido com as categorias do banco e possui a opção “Todas as categorias” como primeira.
- [ ] O endpoint `api/categories-list.php` responde com JSON no formato descrito e ordena por `name`.
- [ ] Em caso de falha no carregamento, o usuário recebe feedback (ex.: toast/alerta) em português.
- [ ] Identificadores, chaves e nomes de variáveis em inglês; textos visíveis em português.

## Dicas

- Centralize a função de busca de categorias em um único arquivo JS (ex.: `app.js`) e reutilize onde necessário.
- Faça cache in-memory da lista de categorias enquanto o usuário permanece no site para evitar requisições duplicadas.
- Valide no back-end que o resultado é um array antes de responder `success: true`.

## Erros comuns

- Esquecer o `header('Content-Type: application/json; charset=UTF-8');` no PHP.
- Retornar chaves de JSON em português e quebrar o consumo no front-end (mantenha `id` e `name`).
- Não tratar o caso de lista vazia (exibir apenas as opções guia nesse cenário).

---

Entregáveis esperados:
- `api/categories-list.php` operacional, consultando o banco e retornando JSON no contrato acima.
- Páginas que usam `#categoryInsertSelect` e `#categoryFilter` populadas automaticamente ao carregar.

