<?php
    namespace TCC\banco\abstratos;
    if (!isset($_SESSION["model"]) || $_SESSION["model"] != true) {
        header('Location: ../../index.php'); 
        exit(); 
    }
    abstract class AbstractU {
        protected $idAlvo;
        protected $valoresNovos;

        public function __construct($idSelecionado, $valoresSelecionados)
        {
            $this->idAlvo = $idSelecionado;
            $this->valoresNovos = $valoresSelecionados;

        }

        abstract public function update();
    }