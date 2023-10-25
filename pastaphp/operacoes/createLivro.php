<?php   
    require_once "../../vendor/autoload.php";

    print_r(scandir("./"));
    use TCC\validacoes\Livro as meuLivro;
    use TCC\banco\crud\Inserir as bota;

    /*if(!isset($_POST['sinopse'])) exit("vai toma no cu racker!");
    try {
        $livroForm = new meuLivro($_POST, $_FILES['capa']);
        $dadosLivro = $livroForm->getArrayLivro();
        $livro = new bota ($dadosLivro);
        $livro->inserirLivro();
    
        header('Location: ../../pages/admin/cadastroLivros.php'); 
        exit();
    } catch (\Exception $maria) {
        echo $maria->getMessage();
    }*/
