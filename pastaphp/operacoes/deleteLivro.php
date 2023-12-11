<?php
    if (!isset($_POST["id"]) || $_POST["id"] == null) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }

    require_once "../../vendor/autoload.php";
    use TCC\banco\livros\Deletar;
    use TCC\banco\livros\Ler;

    try {
        $leitura = new Ler;

        $imagem = $leitura->getImagem($_POST["id"]);
        unlink('../../imagens/capas/'.$imagem[0]);

        $apagarDados = new Deletar ($_POST["id"]);
        $apagarDados -> delete();
    }catch (\Exception $erro) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }