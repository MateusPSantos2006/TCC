<?php
    use TCC\validacoes\Profs;
    use TCC\banco\profs\Ler;

    try {
        $cookie[0] = $_COOKIE["ra"];
        $cookie[1] = $_COOKIE["senha"];
        $dadosCookie = new Profs ($cookie);
        $leituraCookie = $dadosCookie->getDados();

        $dadosBanco = new Ler;
        $leituraBD = $dadosBanco->getProfsRA();
        foreach ($leituraBD as $prof) {
            if ($leituraCookie[0] == $prof[0]) {
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
            if (password_verify($leituraCookie[1], $senhaBD)) {
                header('Location: ../../pages/admin/principalLogado.php'); 
                exit();
            }
        }
    } catch (\Exception $erro) {

    }