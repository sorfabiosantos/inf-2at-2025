# Prova 01 - Simulada

## Descrição da Prova

A prova consiste em 3 questões. O objetivo é avaliar os conhecimentos em manipulação de DOM, eventos, arrays e objetos em JavaScript.

---

### Questão 01 - Perguntas Frequentes (FAQ)

Implemente uma seção de **Perguntas Frequentes (FAQ)** na página `about.html`. O objetivo é criar uma interface funcional que permita:

1. **Exibir uma lista de perguntas e respostas**:
   - Cada pergunta deve ser clicável.
   - Ao clicar em uma pergunta, exiba a resposta correspondente.
   - Ao clicar novamente, oculte a resposta.
As perguntas e respostas mais frequentes estão disponíveis no vetor `faq`:

```javascript

const faqs = [
    {
        question: "Qual a diferença entre ar e vento?",
        answer: "O ar é a mistura de gases que compõem a atmosfera da Terra, enquanto o vento é o movimento do ar causado por diferenças de pressão atmosférica."
    },
    {
        question: "Qual a composição do ar?",
        answer: "O ar é composto por 78% de nitrogênio, 21% de oxigênio, 0,93% de argônio, 0,04% de dióxido de carbono e outros gases em menor quantidade."
    }
];

```
---

### Questão 02 - Exibição de Produtos

No script `assets/script-products.js`, leia o vetor de objetos `products` e preencha as informações dos ar-condicionados na página `products.html`. Cada produto deve exibir:

1. Nome do produto.
2. Imagem correspondente.

Além disso, implemente a funcionalidade de **busca de produtos**:

1. **Campo de busca**:
   - Adicione um campo de texto e um botão para realizar a pesquisa.

2. **Filtragem de produtos**:
   - Ao digitar o nome de um produto e clicar no botão de busca, exiba apenas os produtos que correspondam ao termo pesquisado.

3. **Mensagem de erro**:
   - Caso nenhum produto corresponda ao termo pesquisado, exiba uma mensagem indicando que nenhum produto foi encontrado.


O objeto `products` possui a seguinte estrutura:

```javascript

let products = [
   {
      name: "LG Dual Inverter",
      image: "assets/images/image01.jpeg",
   },
   {
      name: "Samsung Wind-Free",
      image: "assets/images/image02.jpeg",
   }
];

```
---

### Questão 03 - Cadastro de Usuários

Implemente a funcionalidade de cadastro de usuários na página `register.html`. O objetivo é criar uma interface funcional que permita:

1. **Cadastrar novos usuários** com os seguintes campos:
   - Nome
   - Email
   - Senha
```javascript
usersList = [
    {
        name: "João Silva",
        email: "joao@silva",
        password: "senha123"
    },
   {
      name: "Fábio Santos",
      email: "santos@gmail.com",
      password: "1234senha"
   }
];
```

2. **Exibir a lista de usuários cadastrados** logo abaixo do formulário. Cada usuário deve ser exibido com:
   - Nome
   - Email
   - Um botão **Remover** que exclui o usuário da lista e da lista de objetos `usersList`.

