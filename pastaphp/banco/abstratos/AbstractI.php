<?php
    namespace TCC\banco\abstratos;
    if (!isset($_SESSION["model"]) || $_SESSION["model"] != true) {
        header('Location: ../../index.php'); 
        exit(); 
    }
    abstract class AbstractI {
        protected $arrayInsert;

        public function __construct($dados) {
            $this->arrayInsert = $dados;

        } 

        abstract public function insert();
    }