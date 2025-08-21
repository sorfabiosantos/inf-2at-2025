<?php
/*
Explicação e instruções do que deve ser feito
Você vai criar um pequeno script em PHP que calcula o IMC (Índice de Massa Corporal).
Fórmula: IMC = peso / (altura * altura)
- peso em quilogramas (ex.: 70)
- altura em metros usando ponto (ex.: 1.75)
Depois calcule o IMC, formate com 2 casas decimais e determine a classificação:
IMC < 18.5          -> Abaixo do peso
18.5 <= IMC < 25     -> Peso normal
25   <= IMC < 30     -> Sobrepeso
30   <= IMC < 35     -> Obesidade grau 1
35   <= IMC < 40     -> Obesidade grau 2
IMC >= 40            -> Obesidade grau 3
Por fim, exiba o peso, altura, IMC calculado e a classificação.
Cada instrução abaixo tem uma linha em branco para você escrever o código.
Execute no terminal com: php index.php
*/

// defina a variável $peso e atribua um valor de peso para ela

// defina a variável $altura e atribua um valor de altura para ela

// crie a variável $imc e calcule o IMC usando a fórmula

// formate o IMC em 2 casas decimais usando number_format e atribua a $imcFormatado

// crie a variável $classificacao e atribua uma string vazia a ela

// crie uma estrutura if / elseif / else para definir $classificacao conforme as faixas descritas acima

// exiba (echo) uma linha com o texto: "Peso: X kg"

// exiba uma linha com o texto: "Altura: Y m"

// exiba uma linha com o texto: "IMC: Z"

// exiba uma linha com o texto: "Classificação: <classificação>"

// (desafio opcional) valide se $peso e $altura são maiores que zero antes de calcular

// (desafio opcional) permita alterar peso e altura via argumentos de linha de comando ($argv)

/*
Dica rápida:
- Multiplicação: $altura * $altura
- Comparação: if ($imc < 18.5) { ... }
- Eco com quebra de linha: echo "Texto\n";
Boa prática: use sempre ponto para separar casas decimais em valores numéricos literais.
*/
