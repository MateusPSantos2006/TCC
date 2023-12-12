<?php
require_once "../../pastaphp/operacoes/verificarCookie.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sobre</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/header.css">
        <link rel="stylesheet" href="../../css/sobre.css  ">
        <link rel="shortcut icon" href="../../imagens/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="../../css/footer.css">
        <link rel="stylesheet" href="../../css/mediaQueries/sobremq.css">
    </head>
    <body>
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
        <header>
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
            </div>
          </header>

          <section>
            <div class="container-B" id="um">
              <h1>O que é um acervo digital?</h1>
              <article class="texto">
                <p>
                  Um acervo digital é uma forma de levar à internet uma coletânea de conteúdos, no caso, os livros da livros da sala de leitura da E.E. Benedito Calixto e assim incentivando a leitura. 
                </p>
                <p>
                  É importante mencionar que, neste projeto, os livros não são digitalizados, mas sim os seus dados, com o intuito de permitir a verificação da disponibilidade dos livros e trazer uma noção ao leitor das características dos mesmos, como quem escreveu e uma sinópse da obra. 
                </p>
              </article>
              </p>
              </div> 


              <div class="about-b">
                <img src="../../imagens/time.png" class="imagem">
                
                <div class="text-b">
                  <h1>Sobre o desenvolvedores</h1>
                  <article class="texto">
                    <p>Nós somos Alyson e Mateus, estudantes do 3º ano do Novo Ensino Médio Integrado ao Técnico (NOVOTEC), e nossa paixão pela tecnologia nos levou a aprender programação, desenvolvimento de sites e aplicativos. </p>
                    <p>Nesse curso técnico, aprofundamos nossos conhecimentos em desenvolvimento web, preparando-nos para o mercado de trabalho e para prosseguir nossos estudos na área de tecnologia. </p>
                    <p class="descarte">Após concluir o NOVOTEC, decidimos estudar Análise e Desenvolvimento de Sistemas (ADS) na faculdade, acreditando que essa formação é essencial para nos tornarmos profissionais altamente qualificados.</p>
                  </article>
                  </div>
                </div>

                <div class="about">
                  <img src="../../imagens/problema.png" class="imagem">
                  <div class="text"  id="order">
                    <h1>Problema em Questão</h1>
                    <article class="texto">
                      <p>A sala de leitura desempenha um papel crucial na promoção da leitura e aprendizado, mas a dificuldade em acessar rapidamente informações sobre os livros disponíveis representa um obstáculo significativo.</p>
                      <p>Sem uma solução adequada, os leitores precisam inconvenientemente procurar entre centenas, se não milhares, de livros na mesma sessão para achar o livro desejado, e ainda com o risco do estar indisponível, ou ainda pior, nem existir na sala de leitura.</p>
                      <p class="descarte">Além disso, a falta de informações detalhadas, como autor, tema e sinópse, pode dificultar a escolha de leitura.</p>
                    </article>
                    </div>
                  </div>

                  <div class="container-B" id="dois">
                    <h1>A solução</h1>
                    <article class="texto">
                      <p>
                        A implementação de um banco de dados bibliográfico para a sala de leitura pode resolver esse problema, agilizando a pesquisa de livros. Este banco de dados incluiria a digitalização dos livros, proporcionando um sistema eficiente de busca. Adicionalmente, os professores poderiam oferecer recomendações, facilitando aos alunos a escolha de livros relevantes para seus estudos. 
                      </p>
                      <p>
                        Os objetivos específicos incluem a digitalização e armazenamento das informações, a criação de um sistema de busca eficaz, agilizando a pesquisa, e a disponibilização de recomendações dos professores para promover a leitura e contribuir para a disseminação do conhecimento na comunidade escolar.
                      </p>
                    </article>
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
