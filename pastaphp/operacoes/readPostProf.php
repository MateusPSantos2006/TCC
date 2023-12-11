<?php
    if (!isset($acesso) || $acesso != "readPostProf") {
        header('Location: ../public/erro.html'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\posts\Ler;

    try {
    $leitura = new Ler;
    $maximo = $leitura->getNumeroTotal();

        if (isset($_GET["pagina"]) && $_GET["pagina"] != null){
            $entrada = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);
            $entrada = $entrada != null ? $entrada : 1;
            $entrada = $entrada >= 1 ? $entrada : 1;
            $entrada = $entrada <= $maximo ? $entrada : $maximo;
        }else{
            $entrada = 1;
        }
    $dados = $leitura -> getDadosPost($entrada);
    $aux = 0;
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
            <?php
                if (password_verify($algo["idProf"], $_COOKIE["hash"])){
                    ?>
                    <img class="lixeira" data-valor='<?=$algo['id']?>' src="../../imagens/apagar.svg" alt="">
                    <?php
                }
            ?>
        </div>
        <?php
        $aux++;
    }
    if ($aux>=1) {
        ?>
    </div>
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
    }else{
        ?>
            <div class="alerta">
                <p>
                    Não há livros recomendados no momento.
                </p>
            </div>
        <?php
    }
}catch (Exception $erro) {
    header('Location: ../public/erro.html'); 
    exit(); 
}