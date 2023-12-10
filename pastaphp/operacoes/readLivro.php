<?php
    if (!isset($verificacao) || $verificacao != "readLivro") {
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
            $retorno->explorarProcura($dadosPesquisa->getTipoPesquisa(), $dadosPesquisa->getChavePesquisa());
        }else{
            $retorno = new Ler;
            $retorno->explorarTudo();
        }
    } catch (\Exception $erro) {
        echo $erro->getMessage();
    }