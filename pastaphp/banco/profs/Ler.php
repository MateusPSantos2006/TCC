<?php
    namespace TCC\banco\profs;
    if (!isset($_SESSION["model"]) || $_SESSION["model"] != true) {
        header('Location: ../../index.php'); 
        exit(); 
    }
    use TCC\banco\ConexaoPdo;

    class Ler {
        public function getProfId(){
            try{
                $db = new ConexaoPdo;
                $db = $db->conectar();
    
                $sql = "SELECT id FROM profs;";
                $dados = $db->query($sql);
                $db=null;
    
                return $dados;
            } catch (\Exception $erro) {
                echo "Erro 1 ao tentar logar";
            }
        }
        public function getProfsRA(){
            try{
                $db = new ConexaoPdo;
                $db = $db->conectar();
    
                $sql = "SELECT ra, id, ativo, adm, nome FROM profs;";
                $dados = $db->query($sql);
                $db=null;
    
                return $dados;
            } catch (\Exception $erro) {
                echo "Erro 1 ao tentar logar";
            }
        }

        public function getProfsPass($id){
            try {
                $db = new ConexaoPdo;
                $db = $db->conectar();
    
                $sql = "SELECT senha FROM profs WHERE id = $id;
                WHERE id=$id";
                $senha = $db->query($sql);
                $db=null;
    
                return $senha;
            } catch (\Exception $erro) {
                echo "Erro 2 ao tentar logar";
            }

        }
        public function verDadosCru($id){
            try {
                $db = new ConexaoPdo;
                $db = $db->conectar();
    
                $sql = "SELECT * FROM profs where id = :chave";
    
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':chave', $id);
                $stmt->execute();
    
                $valores = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                $db=null;
                return $valores;
            } catch (\PDOException $erro) {
                echo "Erro ao retornar os dados dos livros: $erro";
            }
        }
    }