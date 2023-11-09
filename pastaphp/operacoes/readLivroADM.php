<?php
    require_once "../../vendor/autoload.php";
    use TCC\banco\crud\Ler;
    use TCC\validacoes\Pesquisa;

    
    if (isset($_GET['tipo']) && isset($_GET['dado'])) {
        $dadosPesquisa = new Pesquisa($_GET);

        $retorno = new Ler;
        $retorno->explorarProcuraADM($dadosPesquisa->getTipoPesquisa(), $dadosPesquisa->getChavePesquisa());
    }else{
        $retorno = new Ler;
        $retorno->explorarTudoADM();
    }

    