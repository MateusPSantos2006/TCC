<?php
    namespace TCC\banco\abstratos;
    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        /* 
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        */
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die;
    }
    abstract class AbstractD {
        protected $idAlvo;

        public function __construct($idSelecionado)
        {
            $this->idAlvo = $idSelecionado;
        }

        abstract public function delete();
    }