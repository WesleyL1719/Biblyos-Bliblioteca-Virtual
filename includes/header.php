<?php
// Garante que a sessão seja iniciada apenas uma vez
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">


    <title>BIBLYOS - Sua Biblioteca Digital</title>
</head>
<body>
<div class="container">
  <header>
    <?php if (isset($_SESSION['usuario_id'])): ?>
      <div class="usuario-nome">
        Olá, <strong><?= htmlspecialchars($_SESSION['usuario_nome']) ?></strong>
      </div>
    <?php endif; ?>

    <h1><a href="inicio.php">BIBLYOS</a></h1>
    <nav>
      <a href="livros_lista.php">Todos os Livros</a>
      <?php if (isset($_SESSION['usuario_id'])): ?>
        <a href="upload_livro.php">Enviar Livro</a>
        <a href="gerenciar_livros.php">Gerenciar Meus Livros</a>
        <a href="logout.php">Sair</a>
      <?php else: ?>
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastre-se</a>
      <?php endif; ?>
    </nav>
  </header>
  <main> 



</div> </body>
</html>