<?php
    namespace pastaphp\validacoes;

    class livro {
        private $dadosArray=[];
        private $padrao = "/[@_%$|#*!+={}]/";
        public function __construct($dadosForm, $padrao = $this->padrao) {
            foreach ($dadosForm as $dado) {
                $dado = trim($dado);
                $dado=preg_replace($padrao, "", $dado);
                $this->dadosArray[]=htmlspecialchars($dado, ENT_QUOTES);
            }

            $this->dadosArray[2] = filter_var($this->dadosArray[2], FILTER_SANITIZE_NUMBER_INT);
            $this->dadosArray[9] = filter_var($this->dadosArray[9], FILTER_SANITIZE_NUMBER_INT);
            if ($this->dadosArray[9] < 1) {
                $this->dadosArray[9] = 1;
            }
        }
        public function getArrayLivro() {
            return $this->dadosArray;
        }
    }