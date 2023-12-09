<?php

    $idAlvo = $_POST["id"];
    setcookie("idAlvo", $idAlvo, time() + 60 * 60 * 24, "/");
