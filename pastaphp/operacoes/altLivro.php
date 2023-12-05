<?php 
    require_once "../../vendor/autoload.php";
    use TCC\banco\livros\Ler;
    use TCC\banco\livros\Atualizar;

    $dados = new Ler;
    $dadosAntigos = $dados->verDadosCru($_COOKIE["idAlvo"]);

    foreach ($dadosAntigos as $teste) {
        print_r($teste);
    }
