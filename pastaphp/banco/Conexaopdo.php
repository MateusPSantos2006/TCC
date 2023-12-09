<?php    
    namespace TCC\banco;
    if (!isset($_SESSION["model"]) || $_SESSION["model"] != true) {
        header('Location: ../../index.php'); 
        exit(); 
    }
    class ConexaoPdo {
        private $host = "localhost";
        private $dbname = "biblioteca";
        private $user = "root";
        private $pass = "";
        private \PDO $conexao;

        public function conectar() :\PDO|false{
            if(!empty($conexao)) return $conexao;
            try {
                $conexao = new \PDO(
                    "mysql:host={$this->host};dbname={$this->dbname}",
                    $this->user,
                    $this->pass,
                    array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
                );
                $this->conexao = $conexao;               
                
                return $this->conexao;

            } catch (\PDOException $e){
                echo "Erro ao conectar com MySQL: " . $e->getMessage();
                return false;
            }
        }
    }
