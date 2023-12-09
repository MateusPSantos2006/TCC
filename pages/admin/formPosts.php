<?php 
    require_once "../../vendor/autoload.php";
    require_once "../../pastaphp/operacoes/verificarCookie.php";
    use TCC\banco\livros\Ler as Livros;
    
    $livro = new Livros;
    $dadosLivro = $_COOKIE["idAlvo"];
    setcookie("idAlvo", "", time() - 3600, "/");
    
    ?>
    <h1 class="titulo">
        recomendar livro
    </h1>

    <form action="../../pastaphp/operacoes/createPosts.php" method="post" id="cadastroLivro">
        <div id="areaSinopse">
            <div class="input-group">
                <label class="input-group-text" id="labelSinopse" for="sinopse" ></label>
                <textarea class="form-control" required name="sinopse" rows="6" aria-label="With textarea" name="sinopse" placeholder="Escreva o porquê da recomendação"></textarea>
            </div>
        </div>
        <input type="hidden" name="livroId" value="<?=$dadosLivro?>">
        <div id="areaRestoBotoes">
            <button type="submit" class="btn btn-success">Confirmar</button>
        </div>    
    </form>
    <?php

