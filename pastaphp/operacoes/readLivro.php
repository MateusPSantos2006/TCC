<?php
    class Conexaopdo {
        private $host = "localhost";
        private $dbname = "biblioteca";
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
    class Ler {
        /*
        deve ler cada dado de uma linha e entregar para um array, vamos chamar esse array de dado[]
        haverá um outro array, chamaremos de livro[], e dentro dele contrá dado[]
        tal que livro[0] terá dado[0], dados[1], dado[2], dado[3]..., livro[1] terá dado[0], dados[1], dado[2], dado[3]..., 
        livro[2] terá dado[0], dados[1], dado[2], dado[3]..., r por aí vai

        A quantidade de dado[]s será baseada na necessidade. No index.php deve conter apenas titulo, gênero, autor e status, 
        enquanto explorar.php terá todos os dados.

        No index, deverá conter 6 livros aleatórios, enquanto no explorar terá de 5 em 5 SELECT colunas FROM livros WHERE 
        chave = valor. Deve-se tomar cuidado com repetição de títulos.
        */
    }