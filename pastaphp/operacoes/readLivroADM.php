<?php
    if (!isset($verificacao) || $verificacao != "readLivroADM") {
        header('Location: ../public/erro.html'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\livros\Ler;
    use TCC\validacoes\Pesquisa;

    
    try {
        
        $retorno = new Ler;
        if (isset($_GET['tipo']) && isset($_GET['dado'])) {
            $dadosPesquisa = new Pesquisa($_GET);
            $maximo = $retorno->getNumeroPesquisa($dadosPesquisa->getTipoPesquisa(), $dadosPesquisa->getChavePesquisa());
            if (isset($_GET["pagina"]) && $_GET["pagina"] != null){
                $entrada = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);
                $entrada = $entrada != null ? $entrada : 1;
                $entrada = $entrada >= 1 ? $entrada : 1;
                $entrada = $entrada <= $maximo ? $entrada : $maximo;
            }else{
                $entrada = 1;
            }

            $leitura = $retorno->explorarProcura($dadosPesquisa->getTipoPesquisa(), $dadosPesquisa->getChavePesquisa(), $entrada);

            if ($leitura[1] == true) {
                foreach ($leitura[0] as $objeto) {
                    ?>
                    <div class='livro'>
                        <div class='cardResul' id='<?=$objeto['id']?>'>
                            <img src='../../imagens/capas/<?=$objeto['capa']?>' class="capa" alt='' >
                            <article class='infosCardResul'>
                                <div class='infosCardDados'>
                                    <p> <span class='enfase'>Título: </span><?=$objeto['titulo']?></p>
                                    <p><span class='enfase'>Autor: </span><?=$objeto['autor']?></p>
                                    <p> <span class='enfase'>Genero: </span><?=$objeto['genero']?></p>
                                    <p> <span class='enfase'>Nº de páginas: </span><?=$objeto['npags']?></p>
                                    <p> <span class='enfase'>Editora: </span><?=$objeto['editora']?></p>
                                    <p> <span class='enfase'>Status: </span> <img class='simboloDisponibilidade' src='../../imagens/<?=$objeto['estado']?>.png'><?=$objeto['estado']?></p>
                                </div>
                                <p class='sinopse'> <span class='enfase'>Sinópse: </span><?=$objeto['sinopse']?></p>
                            </article>
                        </div>
                        <div class='botoes'>
                            <button type='button' class='btn btn-primary update' data-valor='<?=$objeto['id']?>'>modificar</button>
                            <button type='button' class='btn btn-danger apagar' data-valor='<?=$objeto['id']?>'>apagar</button>
                            <button type="button" class="btn btn-primary recomendar" data-valor='<?=$objeto['id']?>'>recomendar</button>
                        </div>
                    </div>
                    <?php
                }
                ?>
                  <div id="botoesList">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="?pagina=1&dado=<?=$dadosPesquisa->getChavePesquisa()?>&tipo=<?=$dadosPesquisa->getTipoPesquisa()?>">Primeira</a></li>
            <?php
                if ($entrada > 1) {
                    ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?=$entrada-1?>&dado=<?=$dadosPesquisa->getChavePesquisa()?>&tipo=<?=$dadosPesquisa->getTipoPesquisa()?>">Anterior</a></li>
                    <?php
                }
            ?>
            <li class="page-item"><div class="page-link"><?=$entrada?></div></li>
            <?php
                if ($entrada < $maximo) {
                    ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?=$entrada+1?>&dado=<?=$dadosPesquisa->getChavePesquisa()?>&tipo=<?=$dadosPesquisa->getTipoPesquisa()?>">Próximo</a></li>
                    <?php
                }
            ?>
            <li class="page-item"><a class="page-link" href="?pagina=<?=$maximo?>&dado=<?=$dadosPesquisa->getChavePesquisa()?>&tipo=<?=$dadosPesquisa->getTipoPesquisa()?>">Última</a></li>
        </ul>
      </div>
            <?php
            }else{
                $maximo = $retorno->getNumeroTotal();

                if (isset($_GET["pagina"]) && $_GET["pagina"] != null){
                    $entrada = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);
                    $entrada = $entrada != null ? $entrada : 1;
                    $entrada = $entrada >= 1 ? $entrada : 1;
                    $entrada = $entrada <= $maximo ? $entrada : $maximo;
                }else{
                    $entrada = 1;
                }
    
                $leitura = $retorno->explorarTudo($entrada);
                ?>
                <div class='alerta'>
                    <p>
                        Nenhum livro encontrado com os dados pesquisados, pesquisa geral feita
                    </p>
                </div>
                <?php
                foreach ($leitura as $objeto) {
                    ?>
                    <div class='livro'>
                        <div class='cardResul' id='<?=$objeto['id']?>'>
                            <img src='../../imagens/capas/<?=$objeto['capa']?>' class="capa" alt='' >
                            <article class='infosCardResul'>
                                <div class='infosCardDados'>
                                    <p> <span class='enfase'>Título: </span><?=$objeto['titulo']?></p>
                                    <p><span class='enfase'>Autor: </span><?=$objeto['autor']?></p>
                                    <p> <span class='enfase'>Genero: </span><?=$objeto['genero']?></p>
                                    <p> <span class='enfase'>Nº de páginas: </span><?=$objeto['npags']?></p>
                                    <p> <span class='enfase'>Editora: </span><?=$objeto['editora']?></p>
                                    <p> <span class='enfase'>Status: </span> <img class='simboloDisponibilidade' src='../../imagens/<?=$objeto['estado']?>.png'><?=$objeto['estado']?></p>
                                </div>
                                <p class='sinopse'> <span class='enfase'>Sinópse: </span><?=$objeto['sinopse']?></p>
                            </article>
                        </div>
                        <div class='botoes'>
                            <button type='button' class='btn btn-primary update' data-valor='<?=$objeto['id']?>'>modificar</button>
                            <button type='button' class='btn btn-danger apagar' data-valor='<?=$objeto['id']?>'>apagar</button>
                            <button type="button" class="btn btn-primary recomendar" data-valor='<?=$objeto['id']?>'>recomendar</button>
                        </div>
                    </div>
                    <?php
                }
                ?>
                   <div id="botoesList">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="?pagina=1">Primeira</a></li>
            <?php
                if ($entrada > 1) {
                    ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?=$entrada-1?>">Anterior</a></li>
                    <?php
                }
            ?>
            <li class="page-item"><div class="page-link"><?=$entrada?></div></li>
            <?php
                if ($entrada < $maximo) {
                    ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?=$entrada+1?>">Próximo</a></li>
                    <?php
                }
            ?>
            <li class="page-item"><a class="page-link" href="?pagina=<?=$maximo?>">Última</a></li>
        </ul>
      </div>
            <?php
            }
        }else{
            $maximo = $retorno->getNumeroTotal();

            if (isset($_GET["pagina"]) && $_GET["pagina"] != null){
                $entrada = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);
                $entrada = $entrada != null ? $entrada : 1;
                $entrada = $entrada >= 1 ? $entrada : 1;
                $entrada = $entrada <= $maximo ? $entrada : $maximo;
            }else{
                $entrada = 1;
            }

            $leitura = $retorno->explorarTudo($entrada);

            foreach ($leitura as $objeto) {
                ?>
                    <div class='livro'>
                        <div class='cardResul' id='<?=$objeto['id']?>'>
                            <img src='../../imagens/capas/<?=$objeto['capa']?>' class="capa" alt='' >
                            <article class='infosCardResul'>
                                <div class='infosCardDados'>
                                    <p> <span class='enfase'>Título: </span><?=$objeto['titulo']?></p>
                                    <p><span class='enfase'>Autor: </span><?=$objeto['autor']?></p>
                                    <p> <span class='enfase'>Genero: </span><?=$objeto['genero']?></p>
                                    <p> <span class='enfase'>Nº de páginas: </span><?=$objeto['npags']?></p>
                                    <p> <span class='enfase'>Editora: </span><?=$objeto['editora']?></p>
                                    <p> <span class='enfase'>Status: </span> <img class='simboloDisponibilidade' src='../../imagens/<?=$objeto['estado']?>.png'><?=$objeto['estado']?></p>
                                </div>
                                <p class='sinopse'> <span class='enfase'>Sinópse: </span><?=$objeto['sinopse']?></p>
                            </article>
                        </div>
                        <div class='botoes'>
                            <button type='button' class='btn btn-primary update' data-valor='<?=$objeto['id']?>'>modificar</button>
                            <button type='button' class='btn btn-danger apagar' data-valor='<?=$objeto['id']?>'>apagar</button>
                            <button type="button" class="btn btn-primary recomendar" data-valor='<?=$objeto['id']?>'>recomendar</button>
                        </div>
                    </div>
                <?php
            }
            ?>
                  <div id="botoesList">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="?pagina=1">Primeira</a></li>
            <?php
                if ($entrada > 1) {
                    ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?=$entrada-1?>">Anterior</a></li>
                    <?php
                }
            ?>
            <li class="page-item"><div class="page-link"><?=$entrada?></div></li>
            <?php
                if ($entrada < $maximo) {
                    ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?=$entrada+1?>">Próximo</a></li>
                    <?php
                }
            ?>
            <li class="page-item"><a class="page-link" href="?pagina=<?=$maximo?>">Última</a></li>
        </ul>
      </div>
            <?php
        }
    } catch (\Exception $erro) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }