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
  const temNumero = (texto) => /\\d/.test(texto);

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
    } else if (campoAssunto.value === "trabalho" && mensagem.length < 20) {
      evento.preventDefault();
      aviso.textContent = "Conte mais sobre a proposta (mínimo de 20 caracteres).";
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
