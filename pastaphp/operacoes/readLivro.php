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
    class Pesquisa {
        private $dado;
        private $tipo;
        private $padraoEspeciais = "/[@_%$'`|#*!+.={}]/";

        public function __construct($dadosForm)
        {
            $this->tipo = $dadosForm['tipo'];
            $this->dado = htmlspecialchars(preg_replace($this->padraoEspeciais, "", $dadosForm['tipo']), ENT_QUOTES, 'UTF-8');
        }
    }
    class Ler {
        public function lerBanco () {
            $db = new Conexaopdo;
            $db = $db->conectar();

            $query = "SELECT * FROM livros";
            $resultado = $db->query($query);

            foreach ($resultado as $linha) {
                echo"
                <div class='cardResul'>
                    <img src='../../pastaphp/banco/capas/".$linha['capa']."' alt='' >
                    <article class='infosCardResul'>
                        <div class='infosCardDados'>
                            <p> <span class='enfase'>Título:</span>".$linha['titulo']."<span class='enfase'>Autor:</span>".$linha['autor']."</p>
                            <p> <span class='enfase'>Genero:</span>".$linha['genero']."</p>
                            <p> <span class='enfase'>Nº de páginas:</span>".$linha['ano']."</p>
                            <p> <span class='enfase'>Editora:</span>".$linha['editora']."</p>
                            <p> <span class='enfase'>Status:</span> <img class='simboloDisponibilidade' src='../../imagens/indisponivel.png'>".$linha['estado']."</p>
                        </div>
                        <p class='sinopse'> <span class='enfase'>Sinópse:</span>".$linha['sinopse']."</p>
                    </article>
                </div>";
            }
        }
    }

    $dadosPesquisa = new Ler;
    $dadosPesquisa->lerBanco();