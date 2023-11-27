<?php
    namespace TCC\banco\profs;
    use TCC\banco\abstratos\AbstractI as I;
    use TCC\banco\ConexaoPdo;
    
    class Inserir extends I{

        public function insert() {
            $db = new ConexaoPdo;
            $db = $db->conectar();
            $sql = "INSERT INTO profs (nome, senha, adm, ativo) VALUES (:nome, :senha, :adm, 1)";
            $stmt = $db->prepare($sql);

            $stmt->bindParam(':nome', $this->arrayInsert[0]);
            $stmt->bindParam(':senha', $this->arrayInsert[1]); 
            $stmt->bindParam(':adm', $this->arrayInsert[2]);
            $stmt->execute();

            $db=null;
        }
    }