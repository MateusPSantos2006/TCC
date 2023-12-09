<?php
    namespace TCC\banco\posts;
    use TCC\banco\ConexaoPdo;
    use TCC\banco\abstratos\AbstractD as D;

    class Deletar extends D{
        public function delete() {
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "DELETE FROM posts WHERE id = :idAlvo";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':idAlvo', $this->idAlvo);
            $stmt->execute();

            $db=null;
        }
    }