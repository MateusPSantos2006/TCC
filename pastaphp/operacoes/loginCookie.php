<?php
    use TCC\banco\profs\Ler;

    try {
        $login = false;
        $cookie[0] = $_COOKIE["ra"];
        $cookie[1] = $_COOKIE["hash"];

        $dadosBD = new Ler;
        $leituraBD = $dadosBD->getProfsRA();
        foreach ($leituraBD as $prof) {
            if ($cookie[0] == $prof[0] || password_verify($prof[1], $cookie[1])) {
                header('Location: ../../pages/admin/principalLogado.php'); 
                exit();
            }else{
                setcookie("ra", "", time() - 3600, "/");
                setcookie("senha", "", time() - 3600, "/");
                setcookie("hash", "", time() - 3600, "/");
                setcookie("tipo", "", time() - 3600, "/");
                setcookie("idAlvo", "", time() - 3600, "/");
            }
        } 
    }catch (Exception $erro) {
        echo "$erro";
    }