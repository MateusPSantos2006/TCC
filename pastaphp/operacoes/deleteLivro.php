<?php
    require_once "../../vendor/autoload.php";
    use TCC\banco\livros\Deletar;

    try {
        $apagarDados = new Deletar ($_POST["id"]);
        $apagarDados -> delete();
    }catch (\Exception $erro) {
        echo $erro->getMessage();
    }