<?php
    if (!isset($verificacao) || $verificacao != "randRecom") {
        header('Location: ../public/erro.html'); 
        exit(); 
    }
    use TCC\banco\livros\Ler;

    $leitura = new Ler;
    $livros = $leitura->verTudoCru();

    $posicao = [];
    for ($aux = 0; $aux <= 4; $aux++) {
        $arrayChave = rand(0, count($livros)-1);
        if(array_search($arrayChave, $posicao) != false){
            while (array_search($arrayChave, $posicao) != false) {
                $arrayChave = rand(0, count($livros)-1);
            }
        }
        $posicao[$aux] = $arrayChave;
    }

    function cuspirDiv($pag, $posicao, $livros){
        if ($pag == "log" || $pag == "index") {

            $aux = 0;
            foreach ($posicao as $vez) {
                $array = $livros[$vez];
                ?>
                <div class="carousel-item <?php if ($aux ==0){echo "active";}?>" data-bs-interval="20000">
                    <div class="card">
                        <img src="../../imagens/capas/<?=$array["capa"]?>" alt="">
                        <div class="infosCards">
                            <p class="tituloCard"><?=$array["titulo"]?></p>
                            <div class="tentativaEErro"> 
                                <p class="innerClassInfos"><span class="enfase">Gênero</span><br><?=$array["genero"]?></p>
                                <p class="innerClassInfos"><span class="enfase">Autor</span><br><?=$array["autor"]?></p>
                                <p class="innerClassInfos"><span class="enfase">Status</span><br><?=$array["estado"]?></p>
                                <p class="innerClassInfos"><span class="enfase">Páginas</span><br><?=$array["npags"]?></p>
                                <p class="innerClassInfos"><span class="enfase">Editora</span><br><?=$array["editora"]?></p>
                                <p class="innerClassInfos"><span class="enfase">Ano</span><br><?=$array["ano"]?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $aux++;
            }
        }else{
            header('Location: ../public/erro.html'); 
            exit(); 
        }
    }

    cuspirDiv($pag, $posicao, $livros);