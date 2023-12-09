<?php
    require_once "../../vendor/autoload.php";
    use TCC\banco\posts\Deletar;

    try {
        $apagarPost = new Deletar ($_POST["id"]);
        $apagarPost->delete();
        echo $_POST["id"];
    }catch (Exception $erro) {
        echo $erro->getMessage();
    }