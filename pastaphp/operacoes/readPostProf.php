<?php
    if (!isset($verificacao) || $verificacao != "readPostProf") {
        header('Location: ../../index.php'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\posts\Ler;

    $leitura = new Ler;
    $dados = $leitura -> getDadosPost();

    foreach ($dados as $algo) {
        ?>
        <div class="card">
            <article class="texto">
                <div class="titulo">
                <p><?= $algo[2]?>: <br><span><?= $algo[3]?></span></p>
                <p><?= $algo[1]?></p>
                </div>
                <p class="texto"><?= $algo[0]?></p>
            </article>
            <div class="imagemEspaco">
                <img src="../../imagens/capas/<?= $algo[4]?>" class="imagem" alt="">
            </div>
        </div>
        <?php
    }

    //apenas o card com o id do professor deve ter botão de apagar