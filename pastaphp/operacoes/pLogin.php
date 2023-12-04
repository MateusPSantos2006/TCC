<?php
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
                    
                    header('Location: ../../pages/admin/principalLogado.php'); 
                    exit();
                } else {
                    echo "erro no login 1: dados inválidos";
                }
            }else{
                echo "erro no login 2: dados inválidos";
            }
        } catch (Exception $erro) {
            echo "erro no login: " . $erro;
        }