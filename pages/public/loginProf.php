<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta name="generator" content=
  "HTML Tidy for HTML5 for Linux version 5.9.20">
  <title>Login dos Professores</title>
  <meta charset="utf-8">
  <meta name="viewport" content=
  "width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href=
  "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
  rel="stylesheet" integrity=
  "sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
  crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel=
  'stylesheet'>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/header.css">
  <link rel="stylesheet" href="../../css/loginProf.css">
  <link rel="stylesheet" href="../../css/footer.css">
</head>
<body>
  <?php
      if (isset($_COOKIE["ra"]) && isset($_COOKIE["senha"])) {
        require_once "../../vendor/autoload.php";
        require_once "../../pastaphp/operacoes/loginCookie.php";
      }
  ?>
  <header>
    <a href="../../index.php" class=
    "linkHeader algoQueDeveServirComoLogo"><img src="../../imagens/logo.png"
    class="logo">
    <p>Acervo Digital<br>
    Benedito Calixto</p></a>
    <div class="navegacaoHeader">
      <a href="./sugestao.php" class="linkHeader">Sugestões dos
      professores</a> <a href="./explorar.php" class="linkHeader">Explorar</a>
      <a href="./loginProf.html" class="linkHeader">Login</a>
    </div>
  </header>
  <div class="quase-tudo">
    <div class="wrapper">
      <form action="../../pastaphp/operacoes/pLogin.php" method="post">
        <h1>Login</h1>
        <div class="input-box">
          <div class="input-field">
            <input type="text" placeholder="RA" name="ra" required><i class='bx bxs-user'></i>
          </div>
          <div class="input-field">
            <input type="password" placeholder="Senha" name="senha" required><i class=
            'bx bxs-lock-alt'></i>
          </div>
        </div><button type="submit" class="botao">Entrar</button>
      </form>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <p>© 2023 Acervo Digital Benedito Calixto</p>
        </div>
        <div class="col-md-4">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#">Sobre</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Contato</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Termos de uso</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Política de privacidade</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <p class="copyright">Desenvolvido por <a href=
          "https://github.com/alysonsilvaprado">Alyson Silva Prado</a> e
          <a href="https://github.com/mateuspinheirosantos">Mateus Pinheiro dos
          Santos</a>.</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity=
  "sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z5v5s8I4Jbxcz2l2zCGpKJw5f5p5o5g7f5fn5+F5"
  crossorigin="anonymous"></script>
  <script src=
  "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity=
  "sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
  crossorigin="anonymous"></script>
</body>
</html>