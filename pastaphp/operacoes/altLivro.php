<?php 
    require_once "../../vendor/autoload.php";
    use TCC\banco\crud\Ler;

    $dados = new Ler;
    $retorno = $dados-> explorarTudo();

    ?>