<?php   
    require_once "../../vendor/autoload.php";
    use TCC\validacoes\Comm;
    use TCC\banco\profs\Ler;
    use TCC\banco\posts\Inserir;
    
    try {
        $dados = $_POST;
        date_default_timezone_set('Brazil/East');
        $dadosProf = new Ler;
        $idAllProfs = $dadosProf->getProfId();

        foreach ($idAllProfs as $idProf) {
            if (password_verify($idProf[0], $_COOKIE["hash"])) {
                $dados[2] = $idProf[0];
            }
        }

        $comentario = new Comm($dados);
        $comentario->extras();
        $dadosLivro = $comentario->getDados();

        $envio = new Inserir($dadosLivro);
        $envio->insert();

        header('Location: ../../pages/admin/sugestaoLogado.php'); 
        exit();
    } catch (Exception $erro) {
        echo $erro->getMessage();
    }
    