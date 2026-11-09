<?php
/* ===========================================================================
   ARA0062 — recebe o formulário de contato do frontend
   Este arquivo começa vazio de propósito: o PHP entra no ciclo 8.

   No ciclo 8 ele passa a ler os campos enviados pelo formulário
   (frontend/index.html), validar do lado do servidor e gravar no banco
   usando a conexão de config/conexao.php.

   É para cá que o atributo action do formulário vai apontar:
   <form action="../backend/processa-contato.php" method="post">
   =========================================================================== */
date_default_timezone_set("America/Sao_Paulo");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../frontend/index.html#contato");
    exit;
}

$nome = trim($_POST["nome"] ?? "");
$email = trim($_POST["email"] ?? "");
$assunto = trim($_POST["assunto"] ?? "");
$mensagem = trim($_POST["mensagem"] ?? "");

$assuntosPermitidos = ["sugestao", "duvida", "elogio"];
$erros = [];

if (mb_strlen($nome) < 3 || mb_strlen($nome) > 60) {
    $erros[] = "O nome deve ter entre 3 e 60 caracteres.";
}
if (preg_match("/\\d/u", $nome)) {
    $erros[] = "O nome não pode conter números.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 120) {
    $erros[] = "Informe um e-mail válido (até 120 caracteres).";
}
if (!in_array($assunto, $assuntosPermitidos, true)) {
    $erros[] = "Selecione um assunto válido.";
}
if ($mensagem === "" || mb_strlen($mensagem) > 500) {
    $erros[] = "A mensagem deve ter entre 1 e 500 caracteres.";
}

if ($erros) {
    http_response_code(422);
    $titulo = "Verifique os dados enviados";
} else {
    try {
        require __DIR__ . "/config/conexao.php";
        $sql = "INSERT INTO mensagens (nome, email, assunto, mensagem)
                VALUES (?, ?, ?, ?)";
        $comando = $conexao->prepare($sql);
        $comando->execute([$nome, $email, $assunto, $mensagem]);
        $numero = $conexao->lastInsertId();
        $titulo = "Mensagem recebida";
    } catch (PDOException $erro) {
        error_log($erro->getMessage());
        http_response_code(500);
        $titulo = "Não foi possível enviar";
        $erros[] = "Ocorreu um problema ao salvar sua mensagem. Confira se o banco de dados foi criado e tente novamente.";
    }
}

$nomeSeguro = htmlspecialchars($nome, ENT_QUOTES, "UTF-8");
$emailSeguro = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
$assuntoSeguro = htmlspecialchars($assunto, ENT_QUOTES, "UTF-8");
$mensagemSegura = htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8");
$carimbo = date("d/m/Y") . " às " . date("H:i");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($titulo, ENT_QUOTES, "UTF-8"); ?> — Car Showroom #33</title>
  <link rel="stylesheet" href="../frontend/css/estilo.css">
</head>
<body>
  <header>
    <h1>Car Showroom #33</h1>
    <p>Equipe 33 — Atendimento</p>
  </header>
  <main>
    <section id="resposta">
      <h2><?php echo htmlspecialchars($titulo, ENT_QUOTES, "UTF-8"); ?></h2>
      <?php if ($erros): ?>
        <ul class="aviso">
          <?php foreach ($erros as $erro): ?>
            <li><?php echo htmlspecialchars($erro, ENT_QUOTES, "UTF-8"); ?></li>
          <?php endforeach; ?>
        </ul>
        <p><a href="../frontend/index.html#contato">Voltar ao formulário</a></p>
      <?php else: ?>
        <p class="aviso">Mensagem nº <?php echo (int) $numero; ?> guardada em <?php echo $carimbo; ?>.</p>
        <p>Obrigado, <?php echo $nomeSeguro; ?>! Entraremos em contato pelo e-mail
          <strong><?php echo $emailSeguro; ?></strong>.</p>
        <p>Assunto: <?php echo $assuntoSeguro; ?></p>
        <p>Sua mensagem tem <?php echo mb_strlen($mensagem); ?> caracteres de 500.</p>
        <blockquote><?php echo nl2br($mensagemSegura); ?></blockquote>
        <p><a href="../frontend/index.html#contato">Voltar para o site</a></p>
      <?php endif; ?>
    </section>
  </main>
  <footer class="f1-footer">
    <p>Car Showroom #33 · Equipe 33 · 2026</p>
  </footer>
</body>
</html>