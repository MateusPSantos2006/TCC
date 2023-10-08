<?php
    namespace conexaoPDO;
    
    class conexao {
        private $host = "localhost";
        private $dbname = "biblioteca";
        private $user = "root";
        private $pass = "";

        public function conectar() {
            try {
                $conexao = new \PDO(
                    "mysql:host=$this->host;dbname=$this->dbname;",
                    "$this->user",
                    "$this->pass"
                );
                return $conexao;
            } catch (\PDOException $e){
                echo "Erro ao conectar com MySQL: " . $e->getMessage();
            }
        }
    }