<?php
/*
Objetivo: Declarar variáveis, calcular a média de duas notas e exibir se o aluno foi aprovado.

Enunciado:
Crie um arquivo index.php que contenha três variáveis:
- $aluno (ex: "João")
- $nota1 (ex: 7.5)
- $nota2 (ex: 5.0)

Calcule a média das notas e verifique se o aluno foi aprovado.
Critério: média >= 6 -> aprovado; caso contrário, reprovado.

Regras:
- Se aprovado, mostrar: "João foi aprovado com média 6,25." (substituindo pelo nome e média com 2 casas)
- Caso contrário, mostrar: "João foi reprovado com média 5,75."
*/

aqui as variáveis $aluno, $nota1 e $nota2 e atribua valores a elas

aqui calcule a média: $media = ($nota1 + $nota2) / 2;

faça a estrutura condicional IF para verificar se $media >= 6
- dentro do IF, use echo "$aluno foi aprovado com média X.";
- no ELSE, use echo "$aluno foi reprovado com média X.";
Dica: para formatar a média com 2 casas decimais, use number_format($media, 2, ',', '.')


