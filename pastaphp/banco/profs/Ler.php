<?php
    namespace TCC\banco\profs;
    use TCC\banco\ConexaoPdo;

    class Ler {
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
    }