# Exercício 25 – Calculadora de Juros Simples

Objetivo: Praticar envio de dados via POST, processamento em um script separado e retorno de mensagens via GET.

Enunciado:
- Crie um formulário que receba o capital inicial, a taxa de juros e o tempo (em anos).
- O formulário deve enviar os dados para o script `api/calculate-interest.php` via POST.
- O script deve calcular o montante final usando a fórmula de juros simples e retornar uma mensagem via GET para o formulário.
- A mensagem deve ser exibida abaixo do formulário.

Requisitos:
- Usar tags semânticas no HTML.
- Validar os dados no script PHP e retornar mensagens amigáveis em caso de erro.
- Exibir a mensagem retornada no formulário usando PHP.

Fórmula de Juros Simples:
- Montante = Capital + (Capital × Taxa × Tempo)
