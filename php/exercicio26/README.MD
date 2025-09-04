# Exercício 26 – Simulador de Investimento (Desafiante)

Objetivo: Consolidar leitura e validação de dados, cálculos com fórmulas financeiras e retorno de mensagens via GET.

Descrição:
Implemente um simulador de juros compostos com aportes mensais.
O formulário (index.php) envia os dados via POST para `api/calculate-compound.php` e o script deve redirecionar de volta para `index.php` com uma mensagem via GET (parâmetro `message`). O `index.php` já está preparado para exibir a mensagem.

Campos do formulário:
- initial: Capital inicial (R$) — float, >= 0
- monthly: Aporte mensal (R$) — float, >= 0
- annual_rate: Taxa de juros ao ano (%) — float, >= 0
- months: Prazo em meses — inteiro, >= 1

Regras e validações:
- Todos os campos são obrigatórios e devem respeitar os limites informados.
- Se qualquer valor for inválido, redirecione com uma mensagem de erro amigável.
- Converta a taxa anual para taxa mensal: `r = (annual_rate / 100) / 12`.
- Cálculo do montante final (FV):
  - Para r > 0: `FV = initial * (1 + r)^n + monthly * (((1 + r)^n - 1) / r)`
  - Para r = 0: `FV = initial + monthly * n`
- Calcule também:
  - total investido = `initial + monthly * n`
  - rendimentos = `FV - total investido`
- Formate os valores monetários com 2 casas decimais.
- Retorne a mensagem via GET no formato: `Montante: R$ X | Investido: R$ Y | Rendimentos: R$ Z | Taxa mensal: W%`.

Dicas:
- Use `filter_input()` para ler/sanitizar e faça casts para float/int.
- Trate r = 0 como caso especial para evitar divisão por zero.
- Use `number_format($valor, 2, ',', '.')` para formatar para BR.
- Redirecione com `header('Location: ../index.php?message=' . urlencode($msg)); exit;`

Exemplos de mensagens:
- Montante: R$ 19.490,35 | Investido: R$ 18.000,00 | Rendimentos: R$ 1.490,35 | Taxa mensal: 0,97%
- Dados inválidos. Verifique os campos e tente novamente.

