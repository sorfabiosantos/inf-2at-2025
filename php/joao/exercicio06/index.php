<?php
/*
Exercício 06

Objetivo geral:
Declarar variáveis, calcular a média ponderada de três notas e classificar o resultado do aluno.

Contexto:
Uma escola calcula a média final do aluno usando três avaliações com pesos diferentes.
Você deverá declarar as notas, os pesos, calcular a média ponderada e decidir a situação do aluno.

Definições:
- média ponderada = (nota1 * peso1 + nota2 * peso2 + nota3 * peso3) / (peso1 + peso2 + peso3)

Critérios de resultado:
- média >= 7,00  -> aprovado
- média >= 5,00 e < 7,00 -> recuperação
- média < 5,00 -> reprovado

Saídas esperadas (exemplos):
- "João foi aprovado com média 7,85."
- "João está de recuperação com média 5,40."
- "João foi reprovado com média 4,30."

A média deve ser exibida com 2 casas decimais, usando vírgula como separador decimal.
Use number_format($media, 2, ',', '.') para formatar.

Acessibilidade (importante para estudante cego):
- Mantenha o código bem comentado.
- Faça cada PASSO de forma clara e independente.
- Não use recursos visuais; apenas texto com echo.

Agora escreva o código seguindo os PASSOS abaixo.
*/

// PASSO 1: declare e atribua valores às variáveis $aluno, $nota1, $nota2, $nota3
// Sugestão de exemplo: $aluno = "João"; $nota1 = 6.5; $nota2 = 7.0; $nota3 = 8.0;

// PASSO 2: declare e atribua valores aos pesos $peso1, $peso2, $peso3
// Sugestão: $peso1 = 2; $peso2 = 3; $peso3 = 5;

// PASSO 3: calcule a soma dos pesos em $somaPesos
// Exemplo: $somaPesos = $peso1 + $peso2 + $peso3;

// PASSO 4: calcule a média ponderada em $media
// Fórmula: ($nota1 * $peso1 + $nota2 * $peso2 + $nota3 * $peso3) / $somaPesos

// PASSO 5: determine a situação usando IF / ELSEIF / ELSE
/*
Se $media >= 7 -> $situacao = "aprovado";
Senão se $media >= 5 -> $situacao = "de recuperação";
Senão -> $situacao = "reprovado";
*/

// PASSO 6: formate a média usando number_format e monte a mensagem final em $mensagem
// Exemplo: $mediaFormatada = number_format($media, 2, ',', '.');
// Depois: $mensagem = "$aluno foi APROVADO com média $mediaFormatada." (ajuste o texto conforme a situação)

// PASSO 7: exiba a mensagem usando echo
// echo $mensagem;

?>
