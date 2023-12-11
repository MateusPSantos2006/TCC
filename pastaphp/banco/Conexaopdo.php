<?php    
    namespace TCC\banco;

    if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        /* 
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        */
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
        die;
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