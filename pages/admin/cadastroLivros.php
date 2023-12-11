<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro de Livros</title>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/header.css">
    <link rel="stylesheet" href="../../css/cadastroLivro.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="shortcut icon" href="../../imagens/logo.png" type="image/x-icon">
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

    <section>
        <h1 class="titulo">
            Cadastro do livro
        </h1>

        <div class="alerta">
            <p>
                O livro cadastrado automaticamente constará como disponível para empréstimo. Não cadastre livros avariados ou desaparecidos.
            </p>
        </div>

        <form action="../../pastaphp/operacoes/createLivro.php" method="post" enctype="multipart/form-data" id="cadastroLivro">
            <div class="coluna" id="coluna1">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="titulo">Nome do Livro</label>
                    <input type="text" required class="form-control" id="titulo" placeholder="Titulo" aria-label="titulo" aria-describedby="Escreva o título do livro" name="nomeLivro">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="genero">Gênero do livro</label>
                    <input type="text" required class="form-control" id="genero" placeholder="generôs do livro" aria-label="generôs do livro" aria-describedby="Todos os gêneros do livro, insira cada um separado por hífen" name="genero">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="publicado">Publicado em</label>
                    <input type="number" required class="form-control" id="publicado" placeholder="insira o ano" aria-label="Ano de publicação" aria-describedby="Ano em que foi publicado" name="publicado">
                </div>
            </div>
            <div class="coluna" id="coluna2">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="nomeAutor">Nome do autor</label>
                    <input type="text" required class="form-control" id="nomeAutor" placeholder="nome" aria-label="nome" aria-describedby="Escreva o nome do autor" name="nomeAutor">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="editora">Editora</label>
                    <input type="text" required class="form-control" id="editora" placeholder="Editora do livro" aria-label="Editora do livro" aria-describedby="A editora que trabalhou no livro" name="editora">
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="npags">Nº de páginas</label>
                    <input type="number" required class="form-control" id="npags" placeholder="Número de páginas" aria-label="Número de páginas" aria-describedby="Número total de páginas no livro" name="npags">
                </div>
            </div>
            <div id="base">
                <div id="areaSinopse">
                    <div class="input-group">
                        <label class="input-group-text" id="labelSinopse" for="sinopse">Escreva a sinópse do livro</label>
                        <textarea class="form-control" required name="sinopse" rows="6" aria-label="With textarea" id="sinopse" placeholder="Escreva a sinópse com até 450 caractéres, para não tomar muito do seu tempo, recomendo puxar do ChatGPT mesmo, não tem problema."></textarea>
                    </div>
                </div>
                <div id="areaResto">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Capa do livro</label>
                        <input type="file" name="capa" required class="form-control" id="inputGroupFile01" accept="image/*">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="copias">Nº de cópias</label>
                        <input type="number" required class="form-control" id="copias" value="1" aria-label="Número de cópias" aria-describedby="Número total de cópias desse exemplar" name="copias">
                    </div>

                    <input type="hidden" name="disponibilidade" value="disponivel">
                    <div id="areaRestoBotoes">
                        <button type="submit" class="btn btn-success">Confirmar</button> 
                        <button type="reset" class="btn btn-danger">Limpar</button>
                    </div>
                </div> 
            </div>            
        </form>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
