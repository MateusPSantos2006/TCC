<?php
    namespace TCC\banco\abstratos;
    if (!isset($_SESSION["model"]) || $_SESSION["model"] != true) {
        header('Location: ../../index.php'); 
        exit(); 
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