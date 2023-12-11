<?php   
    require_once "../../pastaphp/operacoes/verificarCookie.php";
    if (!isset($verificacao) || $verificacao != "gerenciamento") {
        header('Location: ../public/erro.html'); 
        exit(); 
    }
?>
    <a href="http:./cadastroLivros.php">
        <button class="acesso">
            Adicionar livro
        </button> 
    </a>
    <a href="http:./explorarlogado.php">
        <button class="acesso">
            Gerenciar livros
        </button> 
    </a>
    <a href="http:./minhasRecom.php">
        <button class="acesso">
            Ver suas recomendações
        </button> 
    </a>