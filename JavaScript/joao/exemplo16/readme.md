# Calculadora de IMC

## Descrição
Este projeto consiste em uma calculadora de Índice de Massa Corporal (IMC) desenvolvida com HTML, CSS e JavaScript. A aplicação permite que o usuário insira seu peso e altura para calcular o IMC e mostrar em qual categoria de peso o usuário se encontra.

## O que é IMC?
O Índice de Massa Corporal (IMC) é uma medida internacional utilizada para calcular se uma pessoa está no peso ideal. O índice é calculado dividindo o peso da pessoa (em quilogramas) pela altura ao quadrado (em metros).

Fórmula: IMC = peso / (altura × altura)

## Funcionalidades
- Interface amigável e responsiva
- Campos para inserção de peso em kg e altura em metros
- Validação de entrada de dados
- Cálculo automático do IMC
- Exibição do resultado com classificação conforme padrões da OMS
- Diferentes cores para cada categoria de IMC para facilitar a visualização

## Como usar
1. Abra o arquivo `index.html` em qualquer navegador web
2. Insira seu peso em quilogramas no campo "Peso (kg)"
3. Insira sua altura em metros no campo "Altura (m)" (exemplo: 1.75)
4. Clique no botão "Calcular IMC"
5. O resultado será exibido na parte inferior da tela, com o valor do IMC e sua classificação

## Classificação do IMC
| IMC           | Classificação       | Cor           |
|---------------|---------------------|---------------|
| Abaixo de 18.5| Abaixo do peso      | Azul          |
| 18.5 a 24.9   | Peso normal         | Verde         |
| 25.0 a 29.9   | Sobrepeso           | Amarelo       |
| 30.0 a 34.9   | Obesidade grau 1    | Laranja claro |
| 35.0 a 39.9   | Obesidade grau 2    | Laranja escuro|
| 40.0 ou mais  | Obesidade grau 3    | Vermelho      |

## Tecnologias utilizadas
- HTML5 semântico
- CSS3 com design responsivo
- JavaScript para manipulação do DOM e cálculos

## Observações importantes
- Os resultados são apenas informativos e não substituem uma consulta médica
- A aplicação foi desenvolvida com foco em acessibilidade e usabilidade
- O design é completamente responsivo, adaptando-se a diferentes tamanhos de tela