<?php
    if (!isset($verificacao) || $verificacao != "readLivroADM") {
        header('Location: ../../index.php'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\livros\Ler;
    use TCC\validacoes\Pesquisa;

    try {
        if (isset($_GET['tipo']) && isset($_GET['dado'])) {
            $dadosPesquisa = new Pesquisa($_GET);
    
            $retorno = new Ler;
            $leitura = $retorno->explorarProcura($dadosPesquisa->getTipoPesquisa(), $dadosPesquisa->getChavePesquisa());

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
            }else{
                ?>
                <div class='alerta'>
                    <p>
                        Nenhum livro encontrado com os dados pesquisados, pesquisa geral feita
                    </p>
                </div>
                <?php
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
            }
        }else{
            $retorno = new Ler;
            $leitura = $retorno->explorarTudo();

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
        }

        //A paginação vem aqui
    } catch (\Exception $erro) {
        echo $erro->getMessage();
    }