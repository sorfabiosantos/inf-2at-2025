# Exercício 22 – Aptidão para Votar (Lei Brasileira)

Objetivo: Praticar leitura de dados via POST e uso de condicionais em PHP para classificar a situação de voto no Brasil.

Enunciado:
Implemente o arquivo user-vote.php para:
- Ler os dados enviados por POST: name (Nome) e age (Idade).
- Validar a idade (número inteiro, não negativa).
- Determinar a situação de voto conforme a lei brasileira considerando apenas a idade:
  - Menores de 16 anos: não podem votar.
  - 16 e 17 anos: voto facultativo.
  - De 18 a 70 anos (inclusive): voto obrigatório.
  - Maiores de 70 anos: voto facultativo.
- Exibir uma mensagem com o nome e a situação de voto.

Requisitos:
- Usar filter_input() para ler e sanitizar os dados.
  - name: FILTER_SANITIZE_SPECIAL_CHARS
  - age: FILTER_SANITIZE_NUMBER_INT
- Tratar campos vazios e idades inválidas (ex.: negativas, não numéricas) com mensagem amigável e link para voltar ao formulário (index.php).
- Exibir a resposta em HTML simples, por exemplo, utilizar tags
```HTML
<p></p>
<strong></strong>
```
Saídas esperadas (exemplos):
- Olá, Ana! Você tem 15 anos. Situação: não pode votar.
- Olá, Bruno! Você tem 16 anos. Situação: voto facultativo.
- Olá, Carla! Você tem 30 anos. Situação: voto obrigatório.
- Olá, Dona Maria! Você tem 71 anos. Situação: voto facultativo.

Dica:
- Construa a lógica com if / else if / else e operadores de comparação.
- Converta a idade para inteiro antes de comparar (ex.: (int)$age).
- Use trim() para limpar espaços do nome.
- Para voltar ao formulário, ofereça um link simples: 
```HTML
<a href="index.php">Voltar</a>.
````

