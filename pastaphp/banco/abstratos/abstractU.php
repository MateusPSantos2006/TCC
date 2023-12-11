<?php
    namespace TCC\banco\abstratos;
    abstract class AbstractU {
        protected $idAlvo;
        protected $valoresNovos;

        public function __construct($idSelecionado, $valoresSelecionados)
        {
            $this->idAlvo = $idSelecionado;
            $this->valoresNovos = $valoresSelecionados;
        }

        abstract public function update();
    }