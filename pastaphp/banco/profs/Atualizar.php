<?php
    namespace TCC\banco\profs;
    use TCC\banco\ConexaoPdo;
    use TCC\banco\abstratos\AbstractU as U;

    class Atualizar extends U{
        public function update() {
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "UPDATE profs 
            SET nome = :nome, senha = :senha, adm = :adm, ativo = :ativo
            WHERE id = :idAlvo";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':nome', $this->valoresNovos[0]);
            $stmt->bindParam(':senha', $this->valoresNovos[1]); 
            $stmt->bindParam(':adm', $this->valoresNovos[2]);
            $stmt->bindParam(':ativo', $this->valoresNovos[3]); 
            $stmt->bindParam(':idAlvo', $this->idAlvo);
            $stmt->execute();

            $db=null;
        }
    }

    //necessário ver comportamento em execução