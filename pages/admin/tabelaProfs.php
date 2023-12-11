<?php
    $verificacao = "readProfs";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Acervo digital - EE Benedito Calixto</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        <section id="secao">
            <div class="alerta">
                <p>
                    Em caso de perda se senha, modifique os dados do usuário.
                </p>
            </div>
            <table class="table table-info table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">RA</th>
                        <th scope="col">ADM</th>
                        <th scope="col">Ativo</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody id="corpoTabela">
                    <?php

                        require_once "../../pastaphp/operacoes/readProfs.php"
                    ?>
                </tbody>
            </table>
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
                      <a href="./sobre.html">Sobre</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="./contatoLogado.php">Contato</a>
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

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="../../scripts/capturaProfs.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>