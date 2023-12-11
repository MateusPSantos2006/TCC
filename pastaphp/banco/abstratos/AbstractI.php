<?php
    namespace TCC\banco\abstratos;
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        header('Location: ../../public/erro.html'); 
        exit(); 
    }
    abstract class AbstractI {
        protected $arrayInsert;

        public function __construct($dados) {
            $this->arrayInsert = $dados;
        } 

        abstract public function insert();
    }