<?php
    namespace validacaoLivro;

    class livro {
        private $dadosArray=[];

        public function __construct($dadosForm, $padrao) {
            foreach ($dadosForm as $dado) {
                $this->dadosArray[]=preg_replace($padrao, "", $dado);
            }

            print_r ($this->dadosArray);
        }
    }

    $x = 0;
    $padrao = "/[@?_%$#*!+={}]/";
    $objeto = new livro ($_GET, $padrao);

