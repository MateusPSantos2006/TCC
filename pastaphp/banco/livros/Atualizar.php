<?php
    namespace TCC\banco\livros;
    use TCC\banco\ConexaoPdo;
    use TCC\banco\abstratos\AbstractU as U;

    class Atualizar extends U{
        public function update() {
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "UPDATE livros 
            SET titulo = :titulo, autor = :autor, ano = :ano, genero = :genero, editora = :editora, npags = :npags, estado = :estado, sinopse = :sinopse, capa = :capa
            WHERE id = :idAlvo";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':titulo', $this->valoresNovos[0]);
            $stmt->bindParam(':autor', $this->valoresNovos[1]); 
            $stmt->bindParam(':ano', $this->valoresNovos[2]);
            $stmt->bindParam(':genero', $this->valoresNovos[3]); 
            $stmt->bindParam(':editora', $this->valoresNovos[4]);
            $stmt->bindParam(':npags', $this->valoresNovos[5]);
            $stmt->bindParam(':estado', $this->valoresNovos[6]); 
            $stmt->bindParam(':sinopse', $this->valoresNovos[7]); 
            $stmt->bindParam(':capa', $this->valoresNovos[8]); 
            $stmt->bindParam(':idAlvo', $this->idAlvo);
            $stmt->execute();

            $db=null;
        }
    }

    //necessário ver comportamento em execução