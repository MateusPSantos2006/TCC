<?php

$pagina = 1;

$limite = 3;

$inicio = ($pagina * $limite) - $limite;



$livro = new PDO("mysql:host=localhost;dbname=teste","root","");

$result = $livro->query("SELECT * from  livros LIMIT $inicio, $limite")->fetchAll();
var_dump($result);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($result as $livro):?>
        <li>
           <?=$item["nome"]?>
        </li>

        <?php endforeach; ?>
</ul>
<a href="">Primeira</a>
<a href=""><<</a>

<?=$pagina?>




</body>
</html>