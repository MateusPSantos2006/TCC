<?php
    namespace TCC\banco\abstratos;
    abstract class AbstractD {
        protected $idAlvo;

        public function __construct($idSelecionado)
        {
            $this->idAlvo = $idSelecionado;
        }

        abstract public function delete();
    }