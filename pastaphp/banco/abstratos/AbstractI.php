<?php
    namespace TCC\banco\abstratos;

    abstract class AbstractI {
        protected $arrayInsert;

        public function __construct($dados) {
            $this->arrayInsert = $dados;
            print_r ($this->arrayInsert);
        } 

        abstract public function insert();
    }