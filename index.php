<?php
    require_once "vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acervo digital - EE Benedito Calixto</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/inicio.css">
        <link rel="stylesheet" href="./css/recomendacoes.css">
    </head>
    <body>
        <header>
            <a href="./index.php" class="linkHeader algoQueDeveServirComoLogo">
                <img src="./imagens/logo.png" class="logo">
                <p>
                    Acervo Digital <br>
                    Benedito Calixto
                </p>
            </a>

            <div class="navegacaoHeader">
                <a href="http://"  target="_blank" class="linkHeader">
                    Sugestões dos professores
                </a>
                <a href="./pages/public/explorar.php" class="linkHeader">
                    Explorar
                </a>
                <a href="./pages/admin/cadastroLivros.php" class="linkHeader">
                    Login
                </a>
            </div>
        </header>

        <main>
            <section id="inicio">
                <div id="carrosel">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="8000">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="./imagens/1.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="./imagens/2.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="./imagens/3.png" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true" id="esquerda"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true" id="direita"></span>
                        </button>
                    </div>
                </div>

                <form action="/pastaphp/operacoes/readLivro.php" id="pesquisa">
                    <h1 class="titulo">
                        Está procurando algum livro?
                    </h1>
                    <div id="innerForm">
                        <div class="inputsArea">
                            <input name="dado" type="text" placeholder="Insira a palavra chave" class="formInput textInput">
                            <select name="tipo" class="formInput">
                                <option value="" disabled selected>Tipo da palavra-chave</option>
                                <option value="titulo">Titulo</option>
                                <option value="autor">Autor</option>
                                <option value="genero">Genero</option>
                                <option value="editora">Editora</option>
                            </select>
                        </div>
                        <button type="submit" class="formInput formSubmit">Enviar</button>
                    </div>
                </form>
            </section>

            <section id="recomendacoes">
                <p class="titulo">
                    Recomendações do dia
                </p>

                <div id="areaCards">
                    
                    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="8000">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="grupoCard">
                                    <div class="card">
                                        <img src="./imagens/oProcesso.jpg" alt="">
                                        <div class="contCard">
                                            <div class="infosCards">
                                                <p class="tituloCard">O processo</p>
                                                <div class="tentativaEErro"> 
                                                    <p class="innerClassInfos"><span class="enfase">Gereno</span><br> Não ficção</p>
                                                    <p class="innerClassInfos"><span class="enfase">Autor</span><br> Kafka</p>
                                                    <p class="innerClassInfos"><span class="enfase">Status</span><br> disponivel</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="./imagens/artistaComFome.jpg" alt="">
                                        <div class="contCard">
                                            <div class="infosCards">
                                                <p class="tituloCard">Artista com fome</p>
                                                <div class="tentativaEErro"> 
                                                    <p class="innerClassInfos"><span class="enfase">Gereno</span><br> Não ficção</p>
                                                    <p class="innerClassInfos"><span class="enfase">Autor</span><br> Kafka</p>
                                                    <p class="innerClassInfos"><span class="enfase">Status</span><br> disponivel</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="grupoCard">
                                    <div class="card">
                                        <img src="./imagens/cartaAoPai.jpg" alt="">
                                        <div class="contCard">
                                            <div class="infosCards">
                                                <p class="tituloCard">Carta ao pai</p>
                                                <div class="tentativaEErro"> 
                                                    <p class="innerClassInfos"><span class="enfase">Gereno</span><br> Não ficção</p>
                                                    <p class="innerClassInfos"><span class="enfase">Autor</span><br> Kafka</p>
                                                    <p class="innerClassInfos"><span class="enfase">Status</span><br> disponivel</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="./imagens/metamorfose.jpg" alt="">
                                        <div class="contCard">
                                            <div class="infosCards">
                                                <p class="tituloCard">A metamorfose</p>
                                                <div class="tentativaEErro"> 
                                                    <p class="innerClassInfos"><span class="enfase">Gereno</span><br> Não ficção</p>
                                                    <p class="innerClassInfos"><span class="enfase">Autor</span><br> Kafka</p>
                                                    <p class="innerClassInfos"><span class="enfase">Status</span><br> disponivel</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="grupoCard">
                                    <div class="card">
                                        <img src="./imagens/oCastelo.jpg" alt="">
                                        <div class="contCard">
                                            <div class="infosCards">
                                                <p class="tituloCard">O Castelo</p>
                                                <div class="tentativaEErro"> 
                                                    <p class="innerClassInfos"><span class="enfase">Gereno</span><br> Não ficção</p>
                                                    <p class="innerClassInfos"><span class="enfase">Autor</span><br> Kafka</p>
                                                    <p class="innerClassInfos"><span class="enfase">Status</span><br> disponivel</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="./imagens/cartasAMilena.jpeg" alt="">
                                        <div class="contCard">
                                            <div class="infosCards">
                                                <p class="tituloCard">Cartas a Milena</p>
                                                <div class="tentativaEErro"> 
                                                    <p class="innerClassInfos"><span class="enfase">Gereno</span><br> Não ficção</p>
                                                    <p class="innerClassInfos"><span class="enfase">Autor</span><br> Kafka</p>
                                                    <p class="innerClassInfos"><span class="enfase">Status</span><br> disponivel</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      
                </div>
            </section>
        </main>   

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z5v5s8I4Jbxcz2l2zCGpKJw5f5p5o5g7f5fn5+F5" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>