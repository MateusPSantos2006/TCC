<?php

    require_once "../../vendor/autoload.php";
    use TCC\banco\livros\Atualizar;
    use TCC\validacoes\LivroEdit as Livro;

    $dadosAlterados = new Livro ($_POST);
    $dadosAlterados->extras();
    $arquivo = $_FILES["capa"];
    if ($arquivo["name"] != null){
        $dadosAlterados->setCapa($_FILES["capa"]);
    };
    $livro = $dadosAlterados->getDados();

    $alteracao = new Atualizar($livro[0], $livro);
    $alteracao -> update();

    $titulo = preg_replace("/ /", "+", $livro[1]);
    header('Location: ../../pages/admin/explorarLogado.php?dado='.$titulo.'&tipo=titulo'); 
    exit();



