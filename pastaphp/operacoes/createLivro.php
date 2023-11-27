<?php   
    require_once "../../vendor/autoload.php";
    use TCC\validacoes\Livro;
    use TCC\banco\livros\Inserir;
    
    try {
        $livroForm = new Livro($_POST, true);
        $livroForm->setCapa ($_FILES['capa']);
        $dadosLivro = $livroForm->getDados();
        $livro = new Inserir ($dadosLivro);
        $livro->insert();
    
        header('Location: ../../pages/admin/cadastroLivros.php'); 
        exit();
    } catch (\Exception $erro) {
        echo $erro->getMessage();
    }