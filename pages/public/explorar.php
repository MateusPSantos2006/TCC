<?php
  $verificacao = "readLivro";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <title>Explorar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/buscaExplorar.css">
    <link rel="shortcut icon" href="../../imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/mediaQueries/explorarmq.css">
  </head>
  <body>
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

      <a href="../../index.php" class="linkHeader algoQueDeveServirComoLogo">
        <img src="../../imagens/logo.png" class="logo">
        <p>
        Acervo Digital <br>
        Benedito Calixto
        </p>
      </a>
      <div class="navegacaoHeader">
        <a href="./sugestao.php"  class="linkHeader">
        Sugestões dos professores
        </a>
        <a href="./explorar.php" class="linkHeader">
        Explorar
        </a>
        <a href="./loginProf.php" class="linkHeader">
        Login
        </a>
      </div>
    </header>
    <div class="mobile-menu">
                <a href="./sugestao.php" class="linkHeader">
                    Sugestões dos professores
                </a>
                <a href="./explorar.php" class="linkHeader">
                    Explorar
                </a>
                <a href="./loginProf.php" class="linkHeader">
                Login
                </a>
          </div>

    <section id="BuscasResul">
      <form action="explorar.php" method="GET" id="busca">
        <div class="inputsArea">
          <input name="dado" type="text" placeholder="Insira a palavra chave" class="formInput textInput" id="">
          <select name="tipo" class="formInput">
            <option value="" disabled selected>Tipo da palavra-chave</option>
            <option value="titulo">Titulo</option>
            <option value="autor">Autor</option>
            <option value="genero">Genero</option>
            <option value="editora">Editora</option>
          </select>
        </div>
        <button type="submit" class="formInput formSubmit">Enviar</button>
      </form>

      <div id="areaCardResul">
      <?php

      include "../../pastaphp/operacoes/readLivro.php";
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
                      <a href="./sobre.html">Sobre o projeto</a>
                    </li>
                    <li class="list-inline-item">
                      <a href="./contato.html">Meios de contato</a>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>