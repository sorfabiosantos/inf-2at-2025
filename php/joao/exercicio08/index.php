<?php
/*
Exercício 08

Objetivo geral:
Declarar variáveis numéricas simples, realizar operações aritméticas básicas e exibir uma mensagem formatada.

Contexto:
Você vai calcular o preço final de um produto aplicando um desconto percentual.
Esse exercício é mais fácil: poucas variáveis, duas contas e uma mensagem final.

Definições principais:
- $descontoValor = $preco * ($descontoPercentual / 100)
- $precoFinal    = $preco - $descontoValor

Acessibilidade (importante para estudante cego):
- Código comentado passo a passo.
- Somente texto em echo, sem dependência visual.
- Nomes de variáveis claros e diretos.

Agora escreva o código seguindo os PASSOS abaixo.
*/

// PASSO 1: declare e atribua valores às variáveis de entrada
// Exemplo sugerido:
// $preco = 120.00;              // preço do produto em Reais
// $descontoPercentual = 15;     // desconto em porcentagem (somente o número)

// PASSO 2: calcule o valor do desconto
// Fórmula: $descontoValor = $preco * ($descontoPercentual / 100);

// PASSO 3: calcule o preço final
// Fórmula: $precoFinal = $preco - $descontoValor;

// PASSO 4: formate os números para exibição
// Use number_format(valor, 2, ',', '.') para 2 casas decimais com vírgula
// Exemplo:
// $precoFormatado = number_format($preco, 2, ',', '.');
// $descontoFormatado = number_format($descontoValor, 2, ',', '.');
// $precoFinalFormatado = number_format($precoFinal, 2, ',', '.');

// PASSO 5: monte a mensagem final na variável $mensagem
// Exemplo de formato:
// $mensagem = "Preço: R$ $precoFormatado. Desconto: R$ $descontoFormatado. Preço final: R$ $precoFinalFormatado.";

// PASSO 6: exiba a mensagem
// echo $mensagem;

?>

