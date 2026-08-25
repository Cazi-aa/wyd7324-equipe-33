# Equipe 33 - Informativo Fórmula 1
Repositório da Equipe 33 da disciplina Desenvolvimento em HTML, liderada por Cauã Zarattini Almeida.
Projeto da disciplina WYD7324 · Desenvolvimento Web em HTML5, CSS, JavaScript
e PHP — Centro Universitário Newton Paiva, 2026/2.

## Tema do projeto

Site informativo sobre Fórmula 1: campeonato mundial de pilotos, campeonato mundial de construtores,
provas realizadas, informações sobre pilotos, informações sobre equipes e formulário para dúvidas/sugestões.
Feito pensando nos fãs de automobilismo para que não procurem por toda web para alguma informação simples sobre
seu piloto/equipe favorita.

## Equipe

**Líder:** Cauã Zarattini Almeida

NA TABELA ABAIXO CADA UM SUBSTITUI OS DADOS TOMANDO COMO EXEMPLO DE FORMATO É ISSO QUE CONTA COMO SUA PARTICIPAÇÃO
NO TRABALHO, PEÇO QUE AO FINALIZAR O SEU COMMIT AVISEM NO GRUPO

| Nome completo | Matrícula | GitHub | Papel |
|---|---|---|---|
| Cauã Zarattini Almeida | 202603039102 | @Cazi-aa | **líder** |
| estevão henrique correa da silva | 202602763028 | @estevoa | integrante |
|-SEU NOME COMPLETO VAI AQUI: FILIPE-| -SUA MATRÍCULA VAI AQUI- | -SEU GIT VAI AQUI- | integrante  |
| Juan Vazquez Nascimento Silva | 202603675394 | @JuanVazquezRoscoe | integrante |
|-SEU NOME COMPLETO VAI AQUI: RAFAEL-| -SUA MATRÍCULA VAI AQUI- | -SEU GIT VAI AQUI- | integrante  |
|-SEU NOME COMPLETO VAI AQUI: VICTOR-| -SUA MATRÍCULA VAI AQUI- | -SEU GIT VAI AQUI- | integrante  |

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
- [ ] Ciclo 3 — `frontend/`: página com listas, tabela e formulário de contato
- [ ] Ciclos 4 e 5 — `frontend/css/`: identidade visual, layout e responsividade
- [ ] Ciclos 6 e 7 — `frontend/js/`: interação, validação e dados via JSON
- [ ] Ciclos 8 a 10 — `backend/`: formulário que grava e lista do banco
