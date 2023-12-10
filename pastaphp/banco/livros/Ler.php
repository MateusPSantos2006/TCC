<?php
    namespace TCC\banco\livros;
    use TCC\banco\ConexaoPdo;

    class Ler {
        public function explorarProcura($tipo, $chave) {
            $chave = '%' . $chave . '%';
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "SELECT * FROM livros where $tipo LIKE :chave";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':chave', $chave);
            $stmt->execute();

            $valores = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            if (!empty($valores)) {
                $db=null;
                return array($valores, true);
            }
            $sql = "SELECT * FROM livros;";
            $valores = $db->query($sql);
            $db=null;    
            return array($valores, false);
        }

        public function explorarTudo(){
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "SELECT * FROM livros;";
            $valores = $db->query($sql);
            $db=null;
            return $valores;
        }

        public function verDadosCru($id){
            try {
                $db = new ConexaoPdo;
                $db = $db->conectar();
    
                $sql = "SELECT * FROM livros where id = :chave";
    
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":chave", $id);
                $stmt->execute();
    
                $valores = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                $db=null;
                return $valores;
            } catch (\PDOException $erro) {
                echo "Erro ao retornar os dados dos livros: $erro";
            }
        }
    }