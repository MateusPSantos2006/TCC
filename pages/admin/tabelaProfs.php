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
    <link rel="stylesheet" href="../../css/footer.css">
</head>
    <body>
        <?php
            require_once "../../pastaphp/operacoes/verificarCookie.php";
        ?>
        <header>
            <a href="./principalLogado.php" class="linkHeader algoQueDeveServirComoLogo">
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
                    <a href="./explorarlogado.php" class="linkHeader">
                        Explorar
                    </a>
                    <a href="./gerenciar.php" class="linkHeader">
                        gerenciar
                    </a>
                </div>
        </header>
        <div class="alerta">
            <p>
                Em caso de perda se senha, modifique os dados do usuário.
            </p>
        </div>
        <section id="tabela">
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
                <tbody>
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
                <p class="copyright">
                Desenvolvido por <a href="https://github.com/alysonsilvaprado">Alyson Silva Prado</a> e <a href="https://github.com/mateuspinheirosantos">Mateus Pinheiro dos Santos</a>.
                </p>
            </div>
            </div>
        </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z5v5s8I4Jbxcz2l2zCGpKJw5f5p5o5g7f5fn5+F5" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>