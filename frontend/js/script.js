document.addEventListener("DOMContentLoaded", () => {
  const formulario = document.querySelector("#contato form");
  if (!formulario) return;

  const campoNome = document.getElementById("nome");
  const campoAssunto = document.getElementById("assunto");
  const campoMensagem = document.getElementById("mensagem");
  const aviso = document.createElement("p");
  aviso.id = "aviso-formulario";
  aviso.setAttribute("role", "status");
  aviso.setAttribute("aria-live", "polite");
  formulario.insertBefore(aviso, formulario.querySelector(".f1-form-buttons"));

  const contador = document.getElementById("contador-mensagem");
  const temNumero = (texto) => /\d/.test(texto);
  const minimoPorAssunto = {
  sugestao: 20,
  duvida: 15,
  elogio: 10,
};


  campoMensagem.addEventListener("input", () => {
    if (contador) contador.textContent = `${campoMensagem.value.length}/500 caracteres`;
  });

  formulario.addEventListener("submit", (evento) => {
    const nome = campoNome.value.trim();
    const mensagem = campoMensagem.value.trim();

    aviso.textContent = "";
    if (nome.length < 3 || nome.length > 60) {
      evento.preventDefault();
      aviso.textContent = "O nome precisa ter entre 3 e 60 caracteres.";
      campoNome.focus();
    } else if (temNumero(nome)) {
      evento.preventDefault();
      aviso.textContent = "O nome não pode conter números.";
      campoNome.focus();
    } else if (mensagem.length < minimoPorAssunto[campoAssunto.value]) {
      evento.preventDefault();
      aviso.textContent = `Escreva pelo menos ${minimoPorAssunto[campoAssunto.value]} caracteres na mensagem.`;
      campoMensagem.focus();
    } else {
      aviso.textContent = "Tudo certo! Enviando mensagem…";
    }
  });

  formulario.addEventListener("reset", () => {
    aviso.textContent = "";
    if (contador) contador.textContent = "0/500 caracteres";
  });
});

let idAtual = 1;

function carregarVeiculo() {

    fetch(`../backend/exibir-especificacoes.php?id=${idAtual}`)
        .then(resposta => {
            if (!resposta.ok) {
                throw new Error("Erro ao buscar veículo");
            }

            return resposta.json();
        })
        .then(veiculo => {

            // Preenche o preço no h1
            document.getElementById("preco-veiculo").textContent =
                Number(veiculo.preco).toLocaleString("pt-BR", {
                    style: "currency",
                    currency: "BRL"
                });

            // Preenche o modelo e o ano no h2
            document.getElementById("modelo-ano").textContent =
                `${veiculo.modelo_ano}`;

            const tabela = document.getElementById("especificacoes-corpo");

            tabela.innerHTML = "";

            const linha = document.createElement("tr");

            const dados = [
                veiculo.motor,
                veiculo.cambio,
                veiculo.quilometragem,
                veiculo.donos_ant,
                veiculo.capacidade,
                veiculo.combustivel,
                veiculo.cor
            ];

            dados.forEach(dado => {

                const celula = document.createElement("td");

                celula.textContent = dado ?? "";

                linha.appendChild(celula);
            });

            tabela.appendChild(linha);
        })
        .catch(erro => {
            console.error("Erro:", erro);
        });
}

function mudarImagem(idAtual) {
    console.log("ID recebido:", idAtual);

    const imagem = document.getElementById("imagem-veiculo");
    imagem.src = `img/veiculo-${idAtual}.png`;
}

// Butões de navegação
document.getElementById("proximo").addEventListener("click", () => {

    idAtual++;

    if (idAtual > 3) {
        idAtual = 1;
    }
    mudarImagem(idAtual);
    carregarVeiculo();
});

document.getElementById("anterior").addEventListener("click", () => {

    idAtual--;

    if (idAtual < 1) {
        idAtual = 3;
    }
    mudarImagem(idAtual);
    carregarVeiculo();
});

carregarVeiculo();