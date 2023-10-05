<?php
    include "../pdo.php";

    $nomeLivro = $_GET['nomeLivro'];
    $genero = $_GET['genero'];
    $publicado = $_GET['publicado'];
    $nomeAutor = $_GET['nomeAutor'];
    $editora = $_GET['editora'];
    $npags = $_GET['npags'];
    $sinopse = $_GET['sinopse'];
    $capa = $_GET['capa'];
    $copias = $_GET['copias'];

    $status = $_GET['status'];
?>