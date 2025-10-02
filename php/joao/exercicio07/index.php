<?php
/*
Exercício 07

Objetivo geral:
Declarar variáveis, realizar cálculos aritméticos envolvendo consumo e custo de viagem, aplicar classificação por faixas e exibir mensagem formatada.

Contexto:
Você vai estimar o custo de uma viagem de carro. Para isso, precisa saber:
- A distância total a percorrer (em km)
- O consumo médio do carro (km por litro)
- O preço do combustível (por litro)

Definições principais:
- litrosNecessarios = distanciaKm / consumoKmLitro
- custoTotal = litrosNecessarios * precoLitro

Classificação do custo (ajuste os valores se quiser testar outras faixas):
- custoTotal > 300          -> "Viagem cara"
- custoTotal >= 150 e <=300 -> "Viagem moderada"
- custoTotal < 150          -> "Viagem econômica"

Saídas esperadas (exemplos de formato):
- "A viagem de 420 km consumirá 35,00 L e custará R$ 245,00. Classificação: Viagem moderada."
- "A viagem de 120 km consumirá 8,00 L e custará R$ 56,00. Classificação: Viagem econômica."

Acessibilidade (importante para estudante cego):
- Código comentado passo a passo.
- Somente texto em echo, sem dependência visual.
- Nomes de variáveis claros.

Agora escreva o código seguindo os PASSOS abaixo.
*/

// PASSO 1: declare e atribua valores às variáveis de entrada:
// Exemplo sugerido:
// $distanciaKm = 420;          // distância total da viagem em quilômetros
// $consumoKmLitro = 12;        // quantos km o carro faz com 1 litro
// $precoLitro = 7.00;          // preço do combustível por litro em Reais

// PASSO 2: calcule a quantidade de litros necessários
// Fórmula: $litrosNecessarios = $distanciaKm / $consumoKmLitro;

// PASSO 3: calcule o custo total da viagem
// Fórmula: $custoTotal = $litrosNecessarios * $precoLitro;

// PASSO 4: classifique o custo conforme as faixas
/*
if ($custoTotal > 300) {
    $classificacao = "Viagem cara";
} elseif ($custoTotal >= 150) { // aqui já sabemos que é <= 300
    $classificacao = "Viagem moderada";
} else {
    $classificacao = "Viagem econômica";
}
*/

// PASSO 5: formate os números para exibição
// Use number_format(valor, 2, ',', '.') para 2 casas decimais com vírgula
// Exemplo:
// $litrosFormatado = number_format($litrosNecessarios, 2, ',', '.');
// $custoFormatado = number_format($custoTotal, 2, ',', '.');
// $distanciaFormatada = number_format($distanciaKm, 0, ',', '.'); // distância sem casas decimais

// PASSO 6: monte a mensagem final na variável $mensagem
/*
$mensagem = "A viagem de $distanciaFormatada km consumirá $litrosFormatado L e custará R$ $custoFormatado. Classificação: $classificacao.";
*/

// PASSO 7: exiba a mensagem
// echo $mensagem;

?>

