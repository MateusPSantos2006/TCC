<?php
    namespace TCC\banco\abstratos;

    abstract class AbstractI {
        protected $arrayInsert;

        public function __construct($dados) {
            $this->arrayInsert = $dados;
        } 

        abstract public function insert();
    }