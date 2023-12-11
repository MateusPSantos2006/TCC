<?php
    namespace TCC\banco\abstratos;
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        header('Location: ../../public/erro.html'); 
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