<?php
    require_once "../../vendor/autoload.php";
    use TCC\banco\crud\Deletar;


    try {
        $apagarDados = new Deletar ($_POST["id"]);
        $apagarDados -> excluirLivro();
    }catch (\Exception $erro) {
        echo $erro->getMessage();
    }