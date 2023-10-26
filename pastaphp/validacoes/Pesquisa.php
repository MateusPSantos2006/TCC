<?php
    namespace TCC\validacoes;

    class Pesquisa {
            private $chave;
            private $tipo;
            private $padraoEspeciais = "/[@_%$'`ﾠ|#*ㅤ!+.={}]/";

            public function __construct($dadosForm)
            {
                $this->tipo = $dadosForm['tipo'];
                $this->chave = htmlspecialchars(preg_replace($this->padraoEspeciais, "", $dadosForm['dado']), ENT_QUOTES, 'UTF-8');
            }

            public function getChavePesquisa() {
                return $this->chave;
            }
            public function getTipoPesquisa() {
                return $this->tipo;
            }
        }