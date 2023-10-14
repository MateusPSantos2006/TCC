<?php

    class Livro {
        private $dadosArray=[];
        private $padrao = "/[@_%$|#*!+={}]/";
        public function __construct($dadosForm) {
            foreach ($dadosForm as $dado) {
                $dado = trim($dado);
                $dado=preg_replace($this->padrao, "", $dado);
                $this->dadosArray[]=htmlspecialchars($dado, ENT_QUOTES);
            }

            $this->dadosArray[2] = filter_var($this->dadosArray[2], FILTER_SANITIZE_NUMBER_INT);
            $this->dadosArray[9] = filter_var($this->dadosArray[9], FILTER_SANITIZE_NUMBER_INT);
            if ($this->dadosArray[9] < 1) {
                $this->dadosArray[9] = 1;
            }
        }
        public function getArrayLivro() {
            return $this->dadosArray;
            print_r($this->dadosArray);
            echo"<br>";
        }
    }
    class Conexaopdo {
        private $host = "localhost";
        private $dbname = "teste";
        private $user = "root";
        private $pass = "";
        private PDO $conexao;

        public function conectar() :PDO|false{
            if(!empty($conexao)) return $conexao;
            try {
                $conexao = new PDO(
                    "mysql:host={$this->host};dbname={$this->dbname}",
                       $this->user,
                    $this->pass,
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
                );
                $this->conexao = $conexao;               
                
                return $this->conexao;

            } catch (PDOException $e){
                echo "Erro ao conectar com MySQL: " . $e->getMessage();
                return false;
            }
        }
    }
    class Inserir {
        private $arrayInsert;

        public function __construct($dados) {
            $this->arrayInsert = $dados;
            print_r ($this->arrayInsert);
        } 

        public function inserirLivro() {
            $db = new Conexaopdo;
            $db = $db->conectar();
            $sql = "INSERT INTO livros (titulo, autor, ano, genero, editora, npags, estado, sinopse, capa) VALUES (:titulo, :autor, :ano, :genero, :editora, :npags, :estado, :sinopse, :capa)";
            $x=0;
            $stmt = $db->prepare($sql);

            while ($this->arrayInsert[9] > $x) {
                $stmt->bindParam(':titulo', $this->arrayInsert[0]);
                $stmt->bindParam(':genero', $this->arrayInsert[1]);
                $stmt->bindParam(':ano', $this->arrayInsert[2]);
                $stmt->bindParam(':autor', $this->arrayInsert[3]);
                $stmt->bindParam(':editora', $this->arrayInsert[4]);
                $stmt->bindParam(':npags', $this->arrayInsert[5]);
                $stmt->bindParam(':sinopse', $this->arrayInsert[6]);
                $stmt->bindParam(':capa', $this->arrayInsert[7]);
                $stmt->bindParam(':estado', $this->arrayInsert[8]);

                $stmt->execute();
                $x++;
            }
            $db=null;
        }
    }

        $livroForm = new Livro($_GET);
        $dadosLivro = $livroForm->getArrayLivro();
        $livro = new Inserir ($dadosLivro);
        $livro->inserirLivro();