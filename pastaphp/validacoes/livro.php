<?php
    namespace TCC\pastaphp\validacoes;

    class Livro {
        private $dadosArray=[];
        private $padraoEspeciais = "/[@_%$'`|#*!+.={}]/";
        public function __construct($dadosForm, $imagemCapa) {
            foreach ($dadosForm as $dado) {
                $dado = trim($dado);
                $dado=preg_replace($this->padraoEspeciais, "", $dado);
                
                $this->dadosArray[]=htmlspecialchars($dado, ENT_QUOTES, 'UTF-8');
            }

            $this->dadosArray[2] = filter_var($this->dadosArray[2], FILTER_SANITIZE_NUMBER_INT);
            $this->dadosArray[7] = filter_var($this->dadosArray[7], FILTER_SANITIZE_NUMBER_INT);
            if ($this->dadosArray[7] < 1) {
                $this->dadosArray[7] = 1;
            }

            $tipo = mime_content_type($imagemCapa['tmp_name']);
            if ($tipo == 'image/jpeg' || $tipo == 'image/jpg' || $tipo == 'image/png') {
                $this->dadosArray[9] = uniqid() . "." . pathinfo($imagemCapa['name'], PATHINFO_EXTENSION);
                    move_uploaded_file($imagemCapa["tmp_name"], __DIR__ . "/../banco/capas/" . $this->dadosArray[9]);
            } else {
                $this->dadosArray[9] = "placeholderCapa.jpg";
            }

        }

        public function getArrayLivro() {
            return $this->dadosArray;
        }
    }