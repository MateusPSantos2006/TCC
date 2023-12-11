<?php
    if (!isset($_POST["id"]) || $_POST["id"] == null) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\posts\Deletar;

    try {
        $apagarPost = new Deletar ($_POST["id"]);
        $apagarPost->delete();
    }catch (Exception $erro) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }