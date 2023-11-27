<?php
    namespace TCC\banco\profs;
    use TCC\banco\ConexaoPdo;

    class Ler {
        public function tabelaProfs(){
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "SELECT * FROM profs;";
            $valores = $db->query($sql);
            $db=null;
            foreach ($valores as $objeto) {
                //planejar como será a tabela
            }
        }
    }