<?php
    if (!isset($_POST["ra"]) || !isset($_POST["senha"]) || $_POST["ra"] == null || $_POST["senha"] == null) {
        header('Location: ../../index.php'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\validacoes\Profs;
    use TCC\banco\profs\Ler;

        try {
            $RA = false;
            $dadosForm = new Profs($_POST);
            $leituraForm = $dadosForm->getDados();
        
            $dadosBanco = new Ler;
            $leituraBD = $dadosBanco->getProfsRA();
            foreach ($leituraBD as $prof) {
                if ($leituraForm[0] == $prof[0]) {
                    $RA = true;
                    $id = $prof[1];
                    $ativo = $prof[2];
                    $adm = $prof[3];
                }
            }
        
            if (isset($RA) && $ativo == 1) {
                $senhaAtividade = $dadosBanco->getProfsPass($id);
                foreach ($senhaAtividade as $Senha) {
                    $senhaBD = $Senha[0];
                }
                if (password_verify($leituraForm[1], $senhaBD)) {
                    setcookie("ra", $leituraForm[0], time() + 60 * 60 * 24 * 90, "/");
                    setcookie("senha", $leituraForm[1], time() + 60 * 60 * 24 * 90, "/");
                    setcookie("hash", password_hash($id, PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 90, "/");
                    setcookie("tipo", password_hash($adm, PASSWORD_DEFAULT), time() + 60 * 60 * 24 * 90, "/");
                    header('Location: ../../pages/admin/principalLogado.php'); 
                    exit();
                } else {
                    setcookie("ra", "", time() - 3600, "/");
                    setcookie("senha", "", time() - 3600, "/");
                    setcookie("hash", "", time() - 3600, "/");
                    setcookie("tipo", "", time() - 3600, "/");
                    setcookie("idAlvo", "", time() - 3600, "/");
                    header('Location: ../../pages/public/loginProf.php'); 
                    exit();
                }
            }else{
                setcookie("ra", "", time() - 3600, "/");
                setcookie("senha", "", time() - 3600, "/");
                setcookie("hash", "", time() - 3600, "/");
                setcookie("tipo", "", time() - 3600, "/");
                setcookie("idAlvo", "", time() - 3600, "/");
                header('Location: ../../pages/public/loginProf.php'); 
                exit();
            }
        } catch (Exception $erro) {
            echo "erro no login: " . $erro;
        }