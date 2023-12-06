<?php
    require_once "../../vendor/autoload.php";
    use TCC\banco\livros\Ler;
    use TCC\validacoes\Pesquisa;

    try {
        $retorno = new Ler;
        if (isset($_GET['tipo']) && isset($_GET['dado'])) {
            $dadosPesquisa = new Pesquisa($_GET);
    
            $retorno->explorarProcuraADM($dadosPesquisa->getTipoPesquisa(), $dadosPesquisa->getChavePesquisa());
        }else{
            $retorno->explorarTudoADM();
        }
    } catch (\Exception $erro) {
        echo $erro->getMessage();
    }


    