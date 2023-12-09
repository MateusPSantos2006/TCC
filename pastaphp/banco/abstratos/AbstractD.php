<?php
    namespace TCC\banco\abstratos;
    if (!isset($_SESSION["model"]) || $_SESSION["model"] != true) {
        header('Location: ../../index.php'); 
        exit(); 
    }
    abstract class AbstractD {
        protected $idAlvo;

        public function __construct($idSelecionado)
        {
            $this->idAlvo = $idSelecionado;

        }

        abstract public function delete();
    }