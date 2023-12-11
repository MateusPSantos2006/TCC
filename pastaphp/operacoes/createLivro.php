<?php  
    if (!isset($_POST["nomeLivro"]) || !isset($_POST["nomeAutor"]) || $_POST["nomeLivro"] == null || $_POST["nomeAutor"] == null) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }
    
    require_once "../../vendor/autoload.php";
    use TCC\validacoes\Livro;
    use TCC\banco\livros\Inserir;
    
    try {
        $livroForm = new Livro($_POST);
        $livroForm->extras();
        $livroForm->setCapa ($_FILES['capa']);
        $dadosLivro = $livroForm->getDados();
        $livro = new Inserir ($dadosLivro);
        $livro->insert();
    
        header('Location: ../../pages/admin/explorarlogado.php'); 
        exit();
    } catch (\Exception $erro) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }  