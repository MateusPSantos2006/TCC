<?php
    namespace TCC\banco\abstratos;
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        header('Location: ../../public/erro.html'); 
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