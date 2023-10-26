<?php

    namespace TCC\banco\crud;
    use TCC\banco\ConexaoPdo;
    
    class Inserir {
        private $arrayInsert;

        public function __construct($dados) {
            $this->arrayInsert = $dados;
            print_r ($this->arrayInsert);
        } 

        public function inserirLivro() {
            $db = new ConexaoPdo;
            $db = $db->conectar();
            $sql = "INSERT INTO livros (titulo, autor, ano, genero, editora, npags, estado, sinopse, capa) VALUES (:titulo, :autor, :ano, :genero, :editora, :npags, :estado, :sinopse, :capa)";
            $x=0;
            $stmt = $db->prepare($sql);

            while ($this->arrayInsert[7] > $x) { 
                $stmt->bindParam(':titulo', $this->arrayInsert[0]);
                $stmt->bindParam(':autor', $this->arrayInsert[3]); 
                $stmt->bindParam(':ano', $this->arrayInsert[2]);
                $stmt->bindParam(':genero', $this->arrayInsert[1]); 
                $stmt->bindParam(':editora', $this->arrayInsert[4]);
                $stmt->bindParam(':npags', $this->arrayInsert[5]);
                $stmt->bindParam(':estado', $this->arrayInsert[8]); 
                $stmt->bindParam(':sinopse', $this->arrayInsert[6]); 
                $stmt->bindParam(':capa', $this->arrayInsert[9]); 

                $stmt->execute();
                $x++;
            }
            $db=null;
        }
    }