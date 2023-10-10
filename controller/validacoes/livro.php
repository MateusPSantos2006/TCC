<?php
    namespace validacaoLivro;

    class livro {
        private $dadosArray=[];

        public function __construct($dadosForm, $padrao) {
            foreach ($dadosForm as $dado) {
                $dado = trim($dado);
                $dado=preg_replace($padrao, "", $dado);
                $this->dadosArray[]=htmlspecialchars($dado, ENT_QUOTES);
            }

            $this->dadosArray[2] = filter_var($this->dadosArray[2], FILTER_SANITIZE_NUMBER_INT);
            $this->dadosArray[9] = filter_var($this->dadosArray[9], FILTER_SANITIZE_NUMBER_INT);
            print_r ($this->dadosArray);
        }
    }

    $padrao = "/[@_%$#*!+={}]/";
    $objeto = new livro ($_GET, $padrao);