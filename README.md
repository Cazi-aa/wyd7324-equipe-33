# Car Showroom #33

**Assunto:** Site de compra de carros de médio/alto padrão
**Equipe:** Cauã Zarattini · Estevão Henrique · Filipe Gabriel · Juan Vazquez · Rafael Pires · Victor Henrique
**Disciplina:** WYD7324 — Desenvolvimento Web em HTML5, CSS, JavaScript e PHP
**Centro Universitário Newton Paiva · 2026/2**

---

## Sobre o projeto

O Car Showroom #33 é um site focado em venda de carros de médio/alto padrão com
opção de contato para venda de carros, onde o cliente vê a imagem do carro e suas
especificações técnicas e preço de tabela.

O site irá possuir uma roleta com imagens dos principais produtos a venda,
formulário de contato para venda ou compra de carros, página de estoque com
exibição em card.

---

## Identidade visual

*Estas são as decisões que o `frontend/css/estilo.css` aplica. Elas estão aqui
para quem lê o repositório entender **por que** o site tem essa cara — e para
a equipe não mudar de ideia a cada aula.*

### Paleta

| Papel | Cor | Por que esta |
|---|---|---|
| `--principal` | `#121212` | <onde aparece, e o que ela comunica sobre o assunto> |
| `--sobre-principal` | `#D9DDE0` | Traz o contraste certo para a cor principal |
| `--apoio` | `#39FF14` | Forte verde, remete velocidade |
| `--fundo` | `#0B0D0E` | Fundo escuro para constraste |
| `--superficie` | `#171A1C` | Mais claro para diferenciar fundo de card |
| `--texto` | `#F5F5F5` | Fácil leitura em tema escuro |

**Contraste conferido** em <https://webaim.org/resources/contrastchecker/>:

```
--texto sobre --superficie ......... __,_:1
--principal sobre --superficie ..... __,_:1
--sobre-principal sobre --principal  __,_:1
```

*Todos precisam ficar em 4,5:1 ou acima.*

### Tipografia

**Fonte:** Monsterrat, com plano B `<fonte de sistema>, sans-serif`
**Pesos:** 400 e <600 ou 700>
**Por que esta:** <uma frase ligando a fonte ao assunto>

**Escala:** `h1` 2.5rem · `h2` 1.75rem · `h3` 1.25rem · corpo 1rem

### Segundo tema

**Arquivo:** `frontend/css/tema-<nome>.css`
**O que é:** <em que situação este tema seria usado — modo escuro, uma data
comemorativa, uma campanha>

Para ligá-lo, tire o comentário da linha do `<link>` no `frontend/index.html`.
Ela vem **depois** do `estilo.css`.

---

## Como abrir

1. Abra **a pasta inteira** no VS Code (*Arquivo → Abrir Pasta*).
2. Abra `frontend/index.html` e clique em **Go Live** (extensão *Live Server*).

---

## Estrutura

```
.
├─ README.md                 esta folha de rosto
├─ frontend/                 tudo o que roda no navegador
│   ├─ index.html
│   ├─ css/
│   │   ├─ estilo.css        a folha do projeto
│   │   └─ tema-<nome>.css   o segundo tema: só variáveis
│   ├─ js/
│   │   └─ script.js         vazio até o ciclo 6
│   └─ img/
└─ backend/                  tudo o que roda no servidor
    ├─ config/
    │   └─ conexao.php       vazio até o ciclo 8
    └─ processa-contato.php
```

---

## Quem fez o quê

*Uma linha por integrante. É o mapa de quem procurar quando algo quebra — e
bate com o histórico de commits.*

| Integrante | Parte da folha de estilo |
|---|---|
| <Nome 1> | o `:root`, o `box-sizing` e o segundo tema |
| <Nome 2> | tipografia: web font, escala e entrelinha |
| <Nome 3> | página e conteúdo |
| <Nome 4> | cabeçalho e menu |
| <Nome 5> | tabela |
| <Nome 6> | formulário e rodapé |