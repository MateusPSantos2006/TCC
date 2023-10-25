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
        private $chave;
        private $tipo;
        private $padraoEspeciais = "/[@_%$'`|ﾠ#ㅤ*!+.={}]/";

        public function __construct($dadosForm)
        {
            $this->tipo = $dadosForm['tipo'];
            $this->chave = htmlspecialchars(preg_replace($this->padraoEspeciais, "", $dadosForm['dado']), ENT_QUOTES, 'UTF-8');
        }

        public function getChavePesquisa() {
            return $this->chave;
        }
        public function getTipoPesquisa() {
            return $this->tipo;
        }
    }
    class Ler {
        public function lerBancoProcura ($tipo, $chave) {
            $chave = '%' . $chave . '%';
            $db = new Conexaopdo;
            $db = $db->conectar();


            $sql = "SELECT * FROM livros where $tipo LIKE :chave";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':chave', $chave);
            $stmt->execute();

            $valores = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if (!empty($valores)) {
                foreach ($valores as $objeto) {
                    echo"
                    <div class='cardResul'>
                        <img src='../../pastaphp/banco/capas/".$objeto['capa']."' alt='' >
                        <article class='infosCardResul'>
                            <div class='infosCardDados'>
                                <p> <span class='enfase'>Título: </span>".$objeto['titulo']."</p>
                                <p><span class='enfase'>Autor: </span>".$objeto['autor']."</p>
                                <p> <span class='enfase'>Genero: </span>".$objeto['genero']."</p>
                                <p> <span class='enfase'>Nº de páginas: </span>".$objeto['npags']."</p>
                                <p> <span class='enfase'>Editora: </span>".$objeto['editora']."</p>
                                <p> <span class='enfase'>Status: </span> <img class='simboloDisponibilidade' src='../../imagens/indisponivel.png'>".$objeto['estado']."</p>
                            </div>
                            <p class='sinopse'> <span class='enfase'>Sinópse: </span>".$objeto['sinopse']."</p>
                        </article>
                    </div>";
                }
            }else{
                echo"
                <div class='alerta'>
                    <p>
                        Nenhum livro encontrado com os dados pesquisados, pesquisa geral feita
                    </p>
                </div>";

            $sql = "SELECT * FROM livros;";
            $valores = $db->query($sql);

            foreach ($valores as $objeto) {
                echo"
                <div class='cardResul'>
                    <img src='../../pastaphp/banco/capas/".$objeto['capa']."' alt='' >
                    <article class='infosCardResul'>
                        <div class='infosCardDados'>
                            <p> <span class='enfase'>Título:</span>".$objeto['titulo']."</p>
                            <p><span class='enfase'>Autor:</span>".$objeto['autor']."</p>
                            <p> <span class='enfase'>Genero:</span>".$objeto['genero']."</p>
                            <p> <span class='enfase'>Nº de páginas:</span>".$objeto['npags']."</p>
                            <p> <span class='enfase'>Editora:</span>".$objeto['editora']."</p>
                            <p> <span class='enfase'>Status:</span> <img class='simboloDisponibilidade' src='../../imagens/indisponivel.png'>".$objeto['estado']."</p>
                        </div>
                        <p class='sinopse'> <span class='enfase'>Sinópse:</span>".$objeto['sinopse']."</p>
                    </article>
                </div>";
            }
            }
        }
        public function lerBancoTudo(){
            $db = new Conexaopdo;
            $db = $db->conectar();

            $sql = "SELECT * FROM livros;";
            $valores = $db->query($sql);

            foreach ($valores as $objeto) {
                echo"
                <div class='cardResul'>
                    <img src='../../pastaphp/banco/capas/".$objeto['capa']."' alt='' >
                    <article class='infosCardResul'>
                        <div class='infosCardDados'>
                            <p> <span class='enfase'>Título:</span>".$objeto['titulo']."</p>
                            <p><span class='enfase'>Autor:</span>".$objeto['autor']."</p>
                            <p> <span class='enfase'>Genero:</span>".$objeto['genero']."</p>
                            <p> <span class='enfase'>Nº de páginas:</span>".$objeto['npags']."</p>
                            <p> <span class='enfase'>Editora:</span>".$objeto['editora']."</p>
                            <p> <span class='enfase'>Status:</span> <img class='simboloDisponibilidade' src='../../imagens/indisponivel.png'>".$objeto['estado']."</p>
                        </div>
                        <p class='sinopse'> <span class='enfase'>Sinópse:</span>".$objeto['sinopse']."</p>
                    </article>
                </div>";
            }
        }
    }

    if (isset($_GET['tipo']) && isset($_GET['dado'])) {
        $dadosPesquisa = new Pesquisa($_GET);

        $retorno = new Ler;
        $retorno->lerBancoProcura($dadosPesquisa->getTipoPesquisa(), $dadosPesquisa->getChavePesquisa());
    }else{
        $retorno = new Ler;
        $retorno->lerBancoTudo();
    }