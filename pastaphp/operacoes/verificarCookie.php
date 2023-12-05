<?php
    require_once "../../vendor/autoload.php";
    use TCC\banco\profs\Ler;

    try {
        $cookie[0] = $_COOKIE["ra"];
        $cookie[1] = $_COOKIE["hash"];

        $dadosBD = new Ler;
        $leituraBD = $dadosBD->getProfsRA();
        foreach ($leituraBD as $prof) {
            if ($cookie[0] != $prof[0] || !password_verify($prof[1], $cookie[1])) {
                setcookie("ra", "", time() - 3600, "/");
                setcookie("senha", "", time() - 3600, "/");
                setcookie("hash", "", time() - 3600, "/");
                header('Location: ../public/loginProf.php'); 
                exit();
            }
        }


    } catch (\Exception $erro) {
        echo ($erro);
    }



