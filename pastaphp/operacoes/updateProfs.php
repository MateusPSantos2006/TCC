<?php
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
        echo "erro na alteração: ".$erro;
    }


