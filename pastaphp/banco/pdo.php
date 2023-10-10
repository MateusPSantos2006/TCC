<?php    
    namespace pastaphp\banco;
    
    class pdo {
        private $host = "127.0.0.1";
        private $dbname = "bibliotecatestes";
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

    //$conn = new pdo();
    //$conn->conectar();