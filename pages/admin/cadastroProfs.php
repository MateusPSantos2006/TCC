<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta name="generator" content=
  "HTML Tidy for HTML5 for Linux version 5.9.20">
  <title>Cadastro dos Professores</title>
  <meta charset="UTF-8">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
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
  <link rel="stylesheet" href="../../css/cadastroProf.css">
  <link rel="stylesheet" href="../../css/footer.css">
</head>
<body>
<?php
    require_once "../../pastaphp/operacoes/verificarCookie.php";
  ?>
  <header>
    <a href="./principalLogado.php" class=
    "linkHeader algoQueDeveServirComoLogo"><img src="../../imagens/logo.png"
    class="logo">
    <p>Acervo Digital<br>
    Benedito Calixto</p></a>
    <div class="navegacaoHeader">
                <a href="./sugestaoLogado.php"  target="_blank" class="linkHeader">
                    Sugestões dos professores
                </a>
      <a href="./explorarlogado.php" class="linkHeader">
          Explorar
      </a>
      <a href="./gerenciar.php" class="linkHeader">
          gerenciar
      </a>
  </div>
  </header>
  <div class="quase-tudo">
    <div class="wrapper">
      <form action="../../pastaphp/operacoes/createProfs.php" method="post" >
        <h1>Cadastrar</h1>
        <div class="input-box">
          <div class="input-field">
            <input type="text" placeholder="Nome Completo"  name="nome" required><i class='bx bxs-user'></i>
          </div>
          <div class="input-field">
            <select class="form-select" id="inputGroupSelect01" name="adm" required>
              <option value="0">Professor(a)</option>
              <option value="1">Administrador(a)</option>

            </select>
          </div>
        </div>
        <div class="input-box">
          <div class="input-field">
            <input type="text" placeholder="RA" required name=
            "ra">
          </div>
          <div class="input-field">
            <input type="text" placeholder="Senha" required name=
            "senha">
          </div><button type="submit" class="botao">Cadastrar</button>
        </div>
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
