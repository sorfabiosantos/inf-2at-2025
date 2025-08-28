# Exercício 21 – Envio de Informações (Formulário → PHP)

Objetivo: Praticar o envio de dados de um formulário HTML para um script PHP usando o método POST e exibir as informações recebidas.

Enunciado:
Implemente o arquivo user-hello.php para:
- Ler os dados enviados por POST: name (Nome), lastname (Sobrenome) e age (Idade).
- Tratar campos vazios (mostrar uma mensagem amigável se faltar algo).
- Exibir uma mensagem de boas-vindas com o nome completo e a idade.

Requisitos:
- Usar filter_input() para ler e sanitizar os dados.
  - Textos: FILTER_SANITIZE_SPECIAL_CHARS.
  - Idade: FILTER_SANITIZE_NUMBER_INT.
- Montar a frase: "Olá, Nome Sobrenome! Você tem X anos."
- Exibir as informações em HTML (pode usar tags simples como <p> e <strong>).
- Se algum campo não vier ou estiver vazio, informar o problema e oferecer um link para voltar ao formulário (index.php).

Saída esperada (no navegador):
Olá, Maria Silva! Você tem 16 anos.

Dica:
- Use a função trim() para remover espaços extras dos textos.
- Para voltar ao formulário, use um link simples:

```html
<a href="index.html">Voltar</a>.
```
 
