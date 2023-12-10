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
    abstract class AbstractV {
        protected $dadosArray=[];
        protected $padraoEspeciais = "/[@_%$'`ﾠ|#*ㅤ!+.={}]/";

        public function __construct($dadosForm) {
            foreach ($dadosForm as $dado) {
                $dado = trim($dado);
                $dado=preg_replace($this->padraoEspeciais, "", $dado);
                
                $this->dadosArray[]=htmlspecialchars($dado, ENT_QUOTES, 'UTF-8');
            }
        }

        public function getDados() {
            return $this->dadosArray;
        }

        abstract function extras();
    }