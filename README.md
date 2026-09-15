# Equipe 33 - Car Showroom #33
Repositório da Equipe 33 da disciplina Desenvolvimento em HTML, liderada por Cauã Zarattini Almeida.
Projeto da disciplina WYD7324 · Desenvolvimento Web em HTML5, CSS, JavaScript
e PHP — Centro Universitário Newton Paiva, 2026/2.

## Tema do projeto

Car Showroom #33: carros de médio/alto padrão, com especificações técnicas, curiosidades, tabela FIPE comparativa e formulário de contato para venda ou compra de carros.
Feito pensando em ofecerer praticidade e agilidade na hora de comprar ou vender um carro.

## Equipe

**Líder:** Cauã Zarattini Almeida

| Nome completo | Matrícula | GitHub | Papel |
|---|---|---|---|
| Cauã Zarattini Almeida | 202603039102 | @Cazi-aa | **líder** |
| estevão henrique correa da silva | 202602763028 | @estevoa | integrante |
| Filipe Gabriel Carneiro Hott | 202602623242 | @Filipehott | integrante  |
| Juan Vazquez Nascimento Silva | 202603675394 | @JuanVazquezRoscoe | integrante |
| Rafael Pires Rezende | 202603137881 | @rPiresr | integrante  |
| Victor Henrique Rocha de Oliveira | 202604060717 | @victorrc-0 | integrante  |

## Estrutura do projeto

Estrutura obrigatória da disciplina. Não renomeie pastas nem arquivos.

O projeto é separado em duas metades: **`frontend/`** guarda o que roda no
navegador (HTML, CSS, JavaScript e imagens) e **`backend/`** guarda o que roda
no servidor (PHP).

```
.
├─ README.md               este arquivo
├─ frontend/               tudo o que roda no navegador
│   ├─ index.html          a página principal
│   ├─ css/
│   │   └─ estilo.css      estilos do site (a partir da aula 04)
│   ├─ js/
│   │   └─ script.js       comportamento da página (a partir do ciclo 6)
│   └─ img/
│       └─ .gitkeep        arquivo vazio que segura a pasta no Git
└─ backend/                tudo o que roda no servidor
    ├─ config/
    │   └─ conexao.php     conexão com o banco (a partir do ciclo 8)
    └─ processa-contato.php  recebe o formulário (a partir do ciclo 8)
```

Os dois arquivos `.php` começam vazios, só com um comentário dentro. Eles
existem desde já para que o lugar do código de servidor esteja combinado quando
o PHP chegar.

## Como abrir o projeto

1. Baixe ou clone o repositório.
2. Abra a pasta no VS Code (*Arquivo → Abrir Pasta* — a pasta do projeto
   inteira, com `frontend/` e `backend/` dentro).
3. Abra `frontend/index.html` e clique em **Go Live** (extensão Live Server).

Como o `index.html` está dentro de `frontend/`, os caminhos dele ficam assim:

| Para chegar em | Escreva no `index.html` |
|---|---|
| a folha de estilos | `css/estilo.css` |
| o script | `js/script.js` |
| uma imagem | `img/foto.jpg` |
| um arquivo do backend | `../backend/processa-contato.php` |

Os dois pontos (`..`) sobem uma pasta: saem do `frontend/` antes de entrar no
`backend/`.

## Andamento por ciclo

- [x] Ciclo 3 — repositório, equipe e estrutura do projeto
- [x] Ciclo 3 — `frontend/`: página com listas, tabela e formulário de contato
- [ ] Ciclos 4 e 5 — `frontend/css/`: identidade visual, layout e responsividade
- [ ] Ciclos 6 e 7 — `frontend/js/`: interação, validação e dados via JSON
- [ ] Ciclos 8 a 10 — `backend/`: formulário que grava e lista do banco
