<?php
    namespace TCC\banco\livros;
    use TCC\banco\ConexaoPdo;

    class Ler {
        public function explorarProcura($tipo, $chave, $pagina) {
            $chave = '%' . $chave . '%';
            $limite = 5;
            $inicio = ($pagina * $limite) - $limite;
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "SELECT * FROM livros WHERE $tipo LIKE :chave LIMIT $inicio, $limite;";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':chave', $chave);
            $stmt->execute();
            $valores = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if (!empty($valores)) {
                $db=null;
                return array($valores, true);
            }  
            return array(null, false);
        }

        function getNumeroPesquisa($tipo, $chave){
            $chave = '%' . $chave . '%';
            $db = new ConexaoPdo;
            $db = $db->conectar();
    
            $sql = "SELECT COUNT(id) numero FROM livros WHERE $tipo LIKE :chave;";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':chave', $chave);
            $stmt->execute();
            $total = $stmt->fetch()["numero"];
            $db=null;
    
            $total = ceil($total / 5);
            return $total;
        }




        function explorarTudo($pagina){
            $limite = 5;
            $inicio = ($pagina * $limite) - $limite;
    
            $db = new ConexaoPdo;
            $db = $db->conectar();
    
            $sql = "SELECT * FROM livros LIMIT $inicio, $limite;";
            $valores = $db->query($sql);
            $db=null;
            return $valores;
        }

        function getNumeroTotal(){
            $db = new ConexaoPdo;
            $db = $db->conectar();
    
            $sql = "SELECT COUNT(id) numero FROM livros;";
            $total = $db->query($sql)->fetch()["numero"];
            $db=null;
    
            $total = ceil($total / 5);
            return $total;
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