<?php    
    if (!isset($_COOKIE["ra"]) || !isset($_COOKIE["hash"]) || $_COOKIE["ra"] == null || $_COOKIE["hash"] == null) {
        header('Location: ../../index.php'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\profs\Ler;

    try {
        $login = false;
        $cookie[0] = $_COOKIE["ra"];
        $cookie[1] = $_COOKIE["hash"];

        $dadosBD = new Ler;
        $leituraBD = $dadosBD->getProfsRA();
        foreach ($leituraBD as $prof) {
            if ($cookie[0] == $prof[0] && password_verify($prof[1], $cookie[1])) {
                $login = $prof[2] == 1 ? true : false;
            }
        }
        if ($login == false) {
            setcookie("ra", "", time() - 3600, "/");
            setcookie("senha", "", time() - 3600, "/");
            setcookie("hash", "", time() - 3600, "/");
            setcookie("tipo", "", time() - 3600, "/");
            setcookie("idAlvo", "", time() - 3600, "/");
            header('Location: ../public/loginProf.php'); 
            exit();
        }
    } catch (Exception $erro) {
        echo ($erro);
    }
