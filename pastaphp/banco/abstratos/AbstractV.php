<?php
    namespace TCC\banco\abstratos;

    abstract class AbstractV {
        protected $dadosArray=[];
        protected $padraoEspeciais = "/[@_%$'`ﾠ|#*ㅤ!+.={}]/";

        public function __construct($dadosForm, $livro) {
            foreach ($dadosForm as $dado) {
                $dado = trim($dado);
                $dado=preg_replace($this->padraoEspeciais, "", $dado);
                
                $this->dadosArray[]=htmlspecialchars($dado, ENT_QUOTES, 'UTF-8');
            }

            if ($livro) {
                $this->dadosArray[2] = filter_var($this->dadosArray[2], FILTER_SANITIZE_NUMBER_INT);
                $this->dadosArray[7] = filter_var($this->dadosArray[7], FILTER_SANITIZE_NUMBER_INT);
                if ($this->dadosArray[7] < 1) {
                    $this->dadosArray[7] = 1;
                }
            }
        }

        public function getDados() {
            return $this->dadosArray;
        }
    }