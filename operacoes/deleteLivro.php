<?php
    if (!isset($_POST["id"]) || $_POST["id"] == null) {
        header('Location: ../../index.php'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\livros\Deletar;

    try {
        $apagarDados = new Deletar ($_POST["id"]);
        $apagarDados -> delete();
    }catch (\Exception $erro) {
        echo $erro->getMessage();
    }