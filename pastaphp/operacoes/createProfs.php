<?php   
    if (!isset($_POST["adm"]) || !isset($_POST["RA"]) || $_POST["adm"] == null || $_POST["RA"] == null) {
        header('Location: ../../index.php'); 
        exit(); 
    } 
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