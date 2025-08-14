# Exercício 10 – Frase com Variável e HTML

Objetivo: Usar uma variável PHP dentro de uma frase com formatação HTML.

Enunciado:
Crie um arquivo index.php que declare a variável:
$curso = "Técnico em Informática";

Mostre na tela a frase:
Você está matriculado no curso Técnico em Informática.

A parte "Técnico em Informática" deve aparecer em negrito usando HTML (<strong> ou <b>).

Requisitos:
- Declarar a variável $curso.
- Usar echo para montar a frase completa.
- Aplicar negrito apenas ao valor da variável.

Saída esperada (no navegador):
Você está matriculado no curso Técnico em Informática. (com o nome do curso em negrito)

Dica: Também poderia usar interpolação: "Você está matriculado no curso <strong>{$curso}</strong>."

Desafio extra: Exiba abaixo o ano atual com date('Y').

