<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerenciamento</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/header.css">
        <link rel="stylesheet" href="../../css/adm.css">
        <link rel="stylesheet" href="../../css/footer.css">
        <link rel="shortcut icon" href="../../imagens/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="../../css/mediaQueries/gerenciarmq.css">
    </head>
    <body>
      <?php
      require_once "../../pastaphp/operacoes/verificarCookie.php";
      ?>
        <header>
        <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget();
  </script> 
            <a href="./principalLogado.php" class="linkHeader algoQueDeveServirComoLogo">
                <img src="../../imagens/logo.png" class="logo">
                <p>
                    Acervo Digital <br>
                    Benedito Calixto
                </p>
            </a>

            <div class="navegacaoHeader">
                <a href="./sugestaoLogado.php" class="linkHeader">
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
        <div class="mobile-menu">
                <a href="./sugestaoLogado.php" class="linkHeader">
                    Sugestões dos professores
                </a>
                <a href="./explorarlogado.php" class="linkHeader">
                    Explorar
                </a>
                <a href="./gerenciar.php" class="linkHeader">
                    gerenciar
                </a>
          </div>
        <section id="gerenciamento">
          <div id="secoes">
          <?php
            $verificacao = "gerenciamento";
            $acesso = password_verify(1, $_COOKIE["tipo"]) ? "gerADM.php" : "gerProf.php";
            require_once "./$acesso";
          ?>
          </div>
        </section>
        <footer class="footer">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <p>
                    © 2023 Acervo Digital Benedito Calixto
                  </p>
                </div>
                <div class="col-md-4">
                <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="./sobreLogado.php">Sobre o projeto</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="./contatoLogado.php">Meios de contato</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <p class="copyright">
                    Desenvolvido por <a href="https://github.com/AlysonSP">Alyson Silva Prado</a> e <a href="https://github.com/MateusPSantos2006">Mateus Pinheiro dos Santos</a>.
                  </p>
                </div>
              </div>
            </div>
          </footer>
        
                <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z5v5s8I4Jbxcz2l2zCGpKJw5f5p5o5g7f5fn5+F5" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            </body>
        </html>
        