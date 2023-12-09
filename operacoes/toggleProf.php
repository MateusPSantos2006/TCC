<?php
    if (!isset($_POST["id"]) || $_POST["id"] == null) {
        header('Location: ../../index.php'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\profs\Ler;
    use TCC\banco\profs\Atualizar;

    $leitura = new Ler;
    $dados = $leitura -> getProfsRA();

    foreach ($dados as $prof) {
        if ($prof["id"] == $_POST["id"]) {
            $atividade = $prof["ativo"] == 1 ? 0 : 1;
        }
    }

    $mod = new Atualizar($_POST["id"], $atividade);
    $mod -> toggle();