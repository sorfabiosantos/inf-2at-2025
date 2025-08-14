# Exercício 06 – var_dump em Array Misturado

Objetivo: Criar um array com tipos diferentes e inspecionar seus valores e tipos usando var_dump().

Enunciado:
Crie um arquivo index.php que declare o array $misturado contendo:
1. Um texto (string)
2. Um número inteiro
3. Um número decimal (float)
4. Um valor booleano (true ou false)

Use var_dump($misturado); para exibir as informações.

Requisitos:
- Nome do array: $misturado
- Conter exatamente 4 elementos (pode adicionar mais no desafio)
- Usar var_dump()

Saída (formato aproximado):
```
array(4) {
  [0]=> string(5) "Olá"
  [1]=> int(42)
  [2]=> float(3.14)
  [3]=> bool(true)
}
```

Dica: var_dump mostra tipo e tamanho (quando for string).

Desafio extra: Adicione um elemento null e outro array dentro de $misturado.

