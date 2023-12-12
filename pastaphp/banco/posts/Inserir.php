<?php
    namespace TCC\banco\posts;
    use TCC\banco\abstratos\AbstractI as I;
    use TCC\banco\ConexaoPdo;
    
    class Inserir extends I{

        public function insert() {
            try {
                $db = new ConexaoPdo;
                $db = $db->conectar();
                $sql = "INSERT INTO posts (texto, dataEnvio, idProf, idLivro) VALUES (:texto, :dataEnvio, :idProf, :IdLivro)";
                $stmt = $db->prepare($sql);
    
                $stmt->bindParam(':texto', $this->arrayInsert[0]);
                $stmt->bindParam(':dataEnvio', $this->arrayInsert[3]);
                $stmt->bindParam(':idProf', $this->arrayInsert[2]);
                $stmt->bindParam(':IdLivro', $this->arrayInsert[1]);
                $stmt->execute();
    
                $db=null;
            } catch (\PDOException $erro) {
                echo "Erro ao inserir comentário: ".$erro;
            }
        }
    }