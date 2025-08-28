# Exercício 23 – Calculadora de IMC

Objetivo: Praticar leitura de dados via POST, validação de entrada e uso de condicionais em PHP para calcular o Índice de Massa Corporal (IMC).

Enunciado:
Implemente o arquivo `calculate-imc.php` para:
- Ler os dados enviados por POST: `name` (Nome), `weight` (Peso) e `height` (Altura).
- Validar os dados recebidos:
  - `weight` e `height` devem ser números positivos.
  - `name` deve ser uma string não vazia.
- Calcular o IMC usando a fórmula: `IMC = peso / (altura * altura)`.
- Determinar a classificação do IMC com base na tabela:
  - Abaixo de 18.5: Abaixo do peso.
  - Entre 18.5 e 24.9: Peso normal.
  - Entre 25 e 29.9: Sobrepeso.
  - 30 ou mais: Obesidade.
- Exibir uma mensagem com o nome, o IMC calculado e a classificação.

Requisitos:
- Usar `filter_input()` para ler e sanitizar os dados.
  - `name`: FILTER_SANITIZE_SPECIAL_CHARS
  - `weight` e `height`: FILTER_SANITIZE_NUMBER_FLOAT com FILTER_FLAG_ALLOW_FRACTION
- Tratar campos vazios e valores inválidos com mensagem amigável e link para voltar ao formulário (`index.php`).
- Exibir a resposta em HTML simples, por exemplo, utilizando tags:
```HTML
<p></p>
<strong></strong>
```

Saídas esperadas (exemplos):
- Olá, Ana! Seu IMC é 22.5. Classificação: Peso normal.
- Olá, Bruno! Seu IMC é 17.8. Classificação: Abaixo do peso.
- Olá, Carla! Seu IMC é 27.3. Classificação: Sobrepeso.
- Olá, Dona Maria! Seu IMC é 31.1. Classificação: Obesidade.

Dica:
- Construa a lógica com if / else if / else e operadores de comparação.
- Converta os valores para float antes de calcular (ex.: `(float)$weight`).
- Use `trim()` para limpar espaços do nome.
- Para voltar ao formulário, ofereça um link simples:
```HTML
<a href="index.php">Voltar</a>.
```
