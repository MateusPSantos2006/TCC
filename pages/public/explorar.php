<!doctype html>
<html lang="pt-br">
  <head>
    <title>Acervo digital - EE Benedito Calixto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/buscaExplorar.css">
</head>
  <body>
    <header>
        <a href="../../index.php" class="linkHeader algoQueDeveServirComoLogo">
            <img src="../../imagens/logo.png" class="logo">
            <p>
                Acervo Digital <br>
                Benedito Calixto
            </p>
        </a>

        <div class="navegacaoHeader">
            <a href="http://"  target="_blank" class="linkHeader">
                Sugestões dos professores
            </a>
            <a href="./explorar.html" class="linkHeader">
                Explorar
            </a>
            <a href="../admin/cadastroLivros.php" class="linkHeader">
                Login
            </a>
        </div>
    </header>

    <section id="BuscasResul">
        <form action="" id="busca">
            <div class="inputsArea">
                <input type="text" placeholder="Insira a palavra chave" class="formInput textInput" id="">
                <select name="tipo" class="formInput">
                    <option value="" disabled selected>Tipo da palavra-chave</option>
                    <option value="">Titulo</option>
                    <option value="">Autor</option>
                    <option value="">Ano de publicação</option>
                    <option value="">Assunto</option>
                </select>
            </div>
            <button type="submit" class="formInput formSubmit">Enviar</button>
        </form>

        <div class="alerta">
            <p>
                Total de livros encontrados: XX 
            </p>
        </div>

        <div id="areaCardResul">
            <?php
                include "../../pastaphp/operacoes/readLivro.php";
            ?>
        </div>
    </section>
    
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>