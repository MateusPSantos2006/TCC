<?php
    if (!isset($acesso) || $acesso != "readPostADM") {
        header('Location: ../../index.php'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\posts\Ler;

    $leitura = new Ler;
    $dados = $leitura -> getDadosPost();
    $aux = 0;
    foreach ($dados as $algo) {
        ?>
        <div class="card">
            <article class="artigo">
                <div class="titulo">
                <p><?= $algo[2]?>: <br><span><?= $algo[3]?></span></p>
                <p><?= $algo[1]?></p>
                </div>
                <p class="texto"><?= $algo[0]?></p>
            </article>
            <div class="imagemEspaco">
                <img src="../../imagens/capas/<?= $algo[4]?>" class="imagem" alt="">
            </div>
            <img class="lixeira" data-valor='<?=$algo['id']?>' src="../../imagens/apagar.svg" alt="">
        </div>
        <?php
        $aux++;
    }
    if($aux < 1) {
        ?>
            <div class="alerta">
                <p>
                    Não há livros recomendados no momento.
                </p>
            </div>
        <?php
    }