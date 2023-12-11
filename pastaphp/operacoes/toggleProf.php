<?php
    if (!isset($_POST["id"]) || $_POST["id"] == null) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\profs\Ler;
    use TCC\banco\profs\Atualizar;

    try {
    $leitura = new Ler;
    $dados = $leitura -> getProfsRA();

    foreach ($dados as $prof) {
        if ($prof["id"] == $_POST["id"]) {
            $atividade = $prof["ativo"] == 1 ? 0 : 1;
        }
    }

    $mod = new Atualizar($_POST["id"], $atividade);
    $mod -> toggle();
}catch(Exception $erro){
    header('Location: ../public/erro.html'); 
    exit(); 
}