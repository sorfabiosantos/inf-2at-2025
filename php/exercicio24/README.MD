# Exercício 24 – Conversor de Temperatura

Objetivo: Praticar envio de dados via POST, processamento em um script separado e retorno de mensagens via GET.

Enunciado:
- Crie um formulário que receba uma temperatura em Celsius e permita escolher a unidade de conversão (Fahrenheit ou Kelvin).
- O formulário deve enviar os dados para o script `api/convert-temperature.php` via POST.
- O script deve calcular a temperatura convertida e retornar uma mensagem via GET para o formulário.
- A mensagem deve ser exibida abaixo do formulário.

Requisitos:
- Usar tags semânticas no HTML.
- Validar os dados no script PHP e retornar mensagens amigáveis em caso de erro.
- Exibir a mensagem retornada no formulário usando PHP.

Fórmulas de conversão:
- Fahrenheit = (Celsius × 9/5) + 32
- Kelvin = Celsius + 273.15
