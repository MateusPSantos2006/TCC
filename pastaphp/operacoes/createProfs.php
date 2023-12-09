<?php   

    require_once "../../vendor/autoload.php";
    use TCC\validacoes\Profs;
    use TCC\banco\profs\Inserir;
    
    try {
        $profsForm = new Profs($_POST);
        $profsForm->extras();
        $dadosProfs = $profsForm->getDados();
        $profs = new Inserir ($dadosProfs);
        $profs->insert();

        header('Location: ../../pages/admin/tabelaProfs.php'); 
        exit();
    }catch (Exception $erro) {
        echo $erro->getMessage();
    }