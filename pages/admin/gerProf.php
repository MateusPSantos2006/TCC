<?php   
    require_once "../../pastaphp/operacoes/verificarCookie.php";
    if (!isset($verificacao) || $verificacao != "gerenciamento") {
        header('Location: ../../index.php'); 
        exit(); 
    }
?>
<main>
    <a href="http:./cadastroLivros.php">
        <button>
            Adicionar livro
        </button> 
    </a>
    <a href="http:./explorarlogado.php">
        <button>
            Gerenciar livros
        </button> 
    </a>
    <a href="http:./minhasRecom.php">
        <button>
            Ver suas recomendações
        </button> 
    </a>
</main>  