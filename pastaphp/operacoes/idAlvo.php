<?php
    if (!isset($_POST["id"]) || $_POST["id"] == null) {
        header('Location: ../public/erro.html'); 
        exit(); 
    }
    $idAlvo = $_POST["id"];
    setcookie("idAlvo", $idAlvo, time() + 60 * 60 * 24, "/");
