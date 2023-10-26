<?php   
    require_once "../../vendor/autoload.php";

    
    use TCC\validacoes\Livro;
    use TCC\banco\crud\Inserir;

        
    try {
        $livroForm = new Livro($_POST, $_FILES['capa']);
        $dadosLivro = $livroForm->getArrayLivro();
        $livro = new Inserir ($dadosLivro);
        $livro->inserirLivro();
    
        header('Location: ../../pages/admin/cadastroLivros.php'); 
        exit();
    } catch (\Exception $maria) {
        echo $maria->getMessage();
    }
