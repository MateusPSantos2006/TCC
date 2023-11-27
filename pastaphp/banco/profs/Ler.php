<?php
    namespace TCC\banco\profs;
    use TCC\banco\ConexaoPdo;

    class Ler {
        public function getProfsRA(){
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "SELECT ra, id FROM profs;";
            $dados = $db->query($sql);
            $db=null;

            return $dados;
        }

        public function getProfsPass($id){
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "SELECT senha FROM profs WHERE id = $id;
            WHERE id=$id";
            $senha = $db->query($sql);
            $db=null;

            return $senha;
        }
    }