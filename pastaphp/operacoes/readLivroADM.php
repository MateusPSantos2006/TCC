<?php
    if (!isset($_SESSION["acesso"]) || $_SESSION["acesso"] != true) {
        header('Location: ../../index.php'); 
        exit(); 
    }
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

        session_unset();
        session_destroy();
    } catch (\Exception $erro) {
        echo $erro->getMessage();
    }


    