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
    class Livro {
        private $dadosArray=[];
        private $padraoEspeciais = "/[@_%$'`|ﾠ#ㅤ*!+.={}]/";
        public function __construct($dadosForm, $imagemCapa) {
            foreach ($dadosForm as $dado) {
                $dado = trim($dado);
                $dado=preg_replace($this->padraoEspeciais, "", $dado);
                
                $this->dadosArray[]=htmlspecialchars(preg_replace($this->padraoEspeciais, "", $dado), ENT_QUOTES, 'UTF-8');
            }

            $this->dadosArray[2] = filter_var($this->dadosArray[2], FILTER_SANITIZE_NUMBER_INT);
            $this->dadosArray[7] = filter_var($this->dadosArray[7], FILTER_SANITIZE_NUMBER_INT);
            if ($this->dadosArray[7] < 1) {
                $this->dadosArray[7] = 1;
            }

            $tipo = mime_content_type($imagemCapa['tmp_name']);
            if ($tipo == 'image/jpeg' || $tipo == 'image/jpg' || $tipo == 'image/png') {
                $this->dadosArray[9] = uniqid() . "." . pathinfo($imagemCapa['name'], PATHINFO_EXTENSION);
                    move_uploaded_file($imagemCapa["tmp_name"], __DIR__ . "/../banco/capas/" . $this->dadosArray[9]);
            } else {
                $this->dadosArray[9] = "placeholderCapa.jpg";
            }

        }

        public function getArrayLivro() {
            return $this->dadosArray;
        }
    }
    class Inserir {
        private $arrayInsert;

        public function __construct($dados) {
            $this->arrayInsert = $dados;
        } 

        public function inserirLivro() {
            $db = new Conexaopdo;
            $db = $db->conectar();
            $sql = "INSERT INTO livros (titulo, autor, ano, genero, editora, npags, estado, sinopse, capa) VALUES (:titulo, :autor, :ano, :genero, :editora, :npags, :estado, :sinopse, :capa)";
            $x=0;
            $stmt = $db->prepare($sql);

            while ($this->arrayInsert[7] > $x) {
                $stmt->bindParam(':titulo', $this->arrayInsert[0]);
                $stmt->bindParam(':genero', $this->arrayInsert[1]);
                $stmt->bindParam(':ano', $this->arrayInsert[2]);
                $stmt->bindParam(':autor', $this->arrayInsert[3]);
                $stmt->bindParam(':editora', $this->arrayInsert[4]);
                $stmt->bindParam(':npags', $this->arrayInsert[5]);
                $stmt->bindParam(':sinopse', $this->arrayInsert[6]);
                $stmt->bindParam(':capa', $this->arrayInsert[9]);
                $stmt->bindParam(':estado', $this->arrayInsert[8]);

                $stmt->execute();
                $x++;
            }
            $db=null;
        }
    }
    
    /*
        use TCC\pastaphp\validacoes\Livro;
        use TCC\pastaphp\banco\crud\Inserir;
    */

    $livroForm = new Livro($_POST, $_FILES['capa']);
    $dadosLivro = $livroForm->getArrayLivro();
    $livro = new Inserir ($dadosLivro);
    $livro->inserirLivro();

    require __DIR__ . "/../../pages/admin/cadastroLivros.php";