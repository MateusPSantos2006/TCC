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
    
        if ($RA && $ativo == 1) {
            $senhaAtividade = $dadosBanco->getProfsPass($id);
            foreach ($senhaAtividade as $Senha) {
                $senhaBD = $Senha[0];
            }
            print_r($leituraForm[1]);
            if (password_verify($leituraForm[1], $senhaBD)) {
                header('Location: ../../pages/admin/principalLogado.php'); 
                exit();
            }
        }else{
            echo "erro no login: dados inválidos";
        }
    } catch (Exception $erro) {
        echo "erro no login: " . $erro;
    }

