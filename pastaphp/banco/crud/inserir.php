<?php

    namespace TCC\pastaphp\banco\crud;
    use TCC\pastaphp\banco\Conexaopdo;

    class Inserir {
        private $arrayInsert;

        public function __construct($dados) {
            $this->arrayInsert = $dados;
            print_r ($this->arrayInsert);
        } 

        public function inserirLivro() {
            $db = new Conexaopdo;
            $db = $db->conectar();
            $sql = "INSERT INTO livros (titulo, autor, ano, genero, editora, npags, estado, sinopse, capa) VALUES (:titulo, :autor, :ano, :genero, :editora, :npags, :estado, :sinopse, :capa)";
            $x=0;
            $stmt = $db->prepare($sql);

            while ($this->arrayInsert[9] > $x) {
                $stmt->bindParam(':titulo', $this->arrayInsert[0]);
                $stmt->bindParam(':autor', $this->arrayInsert[1]);
                $stmt->bindParam(':ano', $this->arrayInsert[2]);
                $stmt->bindParam(':genero', $this->arrayInsert[3]);
                $stmt->bindParam(':editora', $this->arrayInsert[4]);
                $stmt->bindParam(':npags', $this->arrayInsert[5]);
                $stmt->bindParam(':estado', $this->arrayInsert[6]);
                $stmt->bindParam(':sinopse', $this->arrayInsert[7]);
                $stmt->bindParam(':capa', $this->arrayInsert[8]);

                $stmt->execute();
                $x++;
            }
            $db=null;
        }
    }