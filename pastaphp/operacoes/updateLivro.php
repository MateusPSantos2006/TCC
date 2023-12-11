<?php
    if (!isset($_POST["editora"]) || !isset($_POST["npags"]) || $_POST["editora"] == null || $_POST["npags"] == null) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }
    require_once "../../vendor/autoload.php";
    use TCC\banco\livros\Atualizar;
    use TCC\validacoes\LivroEdit as Livro;
    use TCC\banco\livros\Ler;

    try {
    $dadosAlterados = new Livro ($_POST);
    $dadosAlterados->extras();
    $arquivo = $_FILES["capa"];
    if ($arquivo["name"] != null){
        $leitura = new Ler;
        
        $imagem = $leitura->getImagem($_POST["id"]);
        unlink('../../imagens/capas/'.$imagem[0]);

        $dadosAlterados->setCapa($_FILES["capa"]);
    };
    $livro = $dadosAlterados->getDados();

    $alteracao = new Atualizar($livro[0], $livro);
    $alteracao -> update();

    $titulo = preg_replace("/ /", "+", $livro[1]);
    header('Location: ../../pages/admin/explorarLogado.php?dado='.$titulo.'&tipo=titulo'); 
    exit();
}catch (Exception $erro){
    header('Location: ../public/erro.html'); 
    exit(); 
}



