<?php
    require_once "../../vendor/autoload.php";
    use TCC\validacoes\Profs;
    use TCC\banco\profs\Ler;

        $dadosForm = new Profs($_POST);
        $leituraForm = $dadosForm->getDados();
        print_r($leituraForm[0]);
        echo "<br><br>";

        $dadosBanco = new Ler;
        $leituraBD = $dadosBanco->getProfsRA();
        foreach ($leituraBD as $prof) {
            print_r($prof[0]);
            if ($leituraForm[0] == $prof[0]) {
                $RA = true;
                $id = $prof[1];
            }
            echo "<br>";
        }
        echo "<br><br>";

        if ($RA) {
            echo "O ID que bateu é " . $id . "<br>";
            $senha = $dadosBanco->getProfsPass($id);
            foreach ($senha as $Senha) {
                print_r($Senha[0]);
            }
        }



