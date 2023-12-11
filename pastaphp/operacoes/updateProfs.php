<?php
    if (!isset($_POST["adm"]) || !isset($_POST["ra"]) || $_POST["adm"] == null || $_POST["ra"] == null) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\profs\Atualizar;
    use TCC\validacoes\ProfEdit as Prof;

    try {
        $dadosAlterados = new Prof ($_POST);
        $dadosAlterados->extras();
        $prof = $dadosAlterados->getDados();
    
        print_r($prof[2]);
        $alteracao = new Atualizar($prof[0], $prof);
        $alteracao -> update();
    
        header('Location: ../../pages/admin/tabelaProfs.php'); 
        exit();
    } catch (PDOException $erro){
        header('Location: ../public/erro.html'); 
        exit(); 
    }


