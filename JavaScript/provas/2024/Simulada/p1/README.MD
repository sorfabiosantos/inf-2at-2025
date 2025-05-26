# Prova 01 - Simulada

## Descrição da Prova

A prova consiste em 5 questões, cada uma valendo 2 pontos, totalizando 10 pontos. O objetivo é avaliar os conhecimentos em manipulação de DOM, eventos, arrays e objetos em JavaScript.

---

### Questão 01 - Perguntas Frequentes (FAQ)

Implemente uma seção de **Perguntas Frequentes (FAQ)** na página `about.html`. O objetivo é criar uma interface funcional que permita:

1. **Exibir uma lista de perguntas e respostas**:
   - Cada pergunta deve ser clicável.
   - Ao clicar em uma pergunta, exiba a resposta correspondente.
   - Ao clicar novamente, oculte a resposta.

---

### Questão 02 - Exibição de Produtos

No script `assets/script-products.js`, leia o vetor de objetos `products` e preencha as informações dos ar-condicionados na página `products.html`. Cada produto deve exibir:

1. Nome do produto.
2. Imagem correspondente.

O objeto `products` possui a seguinte estrutura:

```javascript

{
   name: "Ar Condicionado Modelo 1",
   image: "assets/images/image01.jpeg"
}

```

---

### Questão 03 - Cadastro de Usuários

Implemente a funcionalidade de cadastro de usuários na página `register.html`. O objetivo é criar uma interface funcional que permita:

1. **Cadastrar novos usuários** com os seguintes campos:
   - Nome
   - Email
   - Senha

2. **Exibir a lista de usuários cadastrados** logo abaixo do formulário. Cada usuário deve ser exibido com:
   - Nome
   - Email
   - Um botão **Remover** que exclui o usuário da lista.

---

### Questão 04 - Pesquisa de Produtos

Implemente uma funcionalidade de pesquisa de produtos na página `products.html`. O objetivo é criar uma interface funcional que permita:

1. **Pesquisar produtos pelo nome**:
   - Um campo de texto e um botão devem permitir pesquisar produtos pelo nome.
   - Exiba apenas os produtos que correspondam ao termo pesquisado.

2. **Exibir mensagem de erro**:
   - Caso nenhum produto corresponda ao termo pesquisado, exiba uma mensagem indicando que nenhum produto foi encontrado.

