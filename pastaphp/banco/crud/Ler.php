<?php
    namespace TCC\banco\crud;
    use TCC\banco\ConexaoPdo;

    class Ler {
        public function explorarProcuraADM ($tipo, $chave) {
            $chave = '%' . $chave . '%';
            $db = new ConexaoPdo;
            $db = $db->conectar();


            $sql = "SELECT * FROM livros where $tipo LIKE :chave";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':chave', $chave);
            $stmt->execute();


            $valores = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            if (!empty($valores)) {
                foreach ($valores as $objeto) {
                    echo"
                    <div class='livro'>
                        <div class='cardResul'>
                            <img src='../../imagens/capas/".$objeto['capa']."' alt='' >
                            <article class='infosCardResul'>
                                <div class='infosCardDados'>
                                    <p> <span class='enfase'>Título: </span>".$objeto['titulo']."</p>
                                    <p><span class='enfase'>Autor: </span>".$objeto['autor']."</p>
                                    <p> <span class='enfase'>Genero: </span>".$objeto['genero']."</p>
                                    <p> <span class='enfase'>Nº de páginas: </span>".$objeto['npags']."</p>
                                    <p> <span class='enfase'>Editora: </span>".$objeto['editora']."</p>
                                    <p> <span class='enfase'>Status: </span> <img class='simboloDisponibilidade' src='../../imagens/".$objeto['estado'].".png'>".$objeto['estado']."</p>
                                </div>
                                <p class='sinopse'> <span class='enfase'>Sinópse: </span>".$objeto['sinopse']."</p>
                            </article>
                        </div>
                        <div class='botoes'>
                            <button type='button' class='btn btn-primary update' data-valor='".$objeto['id']."'>Primary</button>
                            <button type='button' class='btn btn-danger apagar' data-valor='".$objeto['id']."'>apagar</button>
                        </div>
                    </div>";
                }
                $db=null;
            }else{
                echo"
                <div class='alerta'>
                    <p>
                        Nenhum livro encontrado com os dados pesquisados, pesquisa geral feita
                    </p>
                </div>";

            $sql = "SELECT * FROM livros;";
            $valores = $db->query($sql);
            $db=null;
            foreach ($valores as $objeto) {
                echo"
                <div class='livro'>
                        <div class='cardResul'>
                            <img src='../../imagens/capas/".$objeto['capa']."' alt='' >
                            <article class='infosCardResul'>
                                <div class='infosCardDados'>
                                    <p> <span class='enfase'>Título: </span>".$objeto['titulo']."</p>
                                    <p><span class='enfase'>Autor: </span>".$objeto['autor']."</p>
                                    <p> <span class='enfase'>Genero: </span>".$objeto['genero']."</p>
                                    <p> <span class='enfase'>Nº de páginas: </span>".$objeto['npags']."</p>
                                    <p> <span class='enfase'>Editora: </span>".$objeto['editora']."</p>
                                    <p> <span class='enfase'>Status: </span> <img class='simboloDisponibilidade' src='../../imagens/".$objeto['estado'].".png'>".$objeto['estado']."</p>
                                </div>
                                <p class='sinopse'> <span class='enfase'>Sinópse: </span>".$objeto['sinopse']."</p>
                            </article>
                        </div>
                        <div class='botoes'>
                            <button type='button' class='btn btn-primary update' data-valor='".$objeto['id']."'>Primary</button>
                            <button type='button' class='btn btn-danger apagar' data-valor='".$objeto['id']."'>apagar</button>
                        </div>
                    </div>";
            }
            }
        }
        public function explorarTudoADM(){
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "SELECT * FROM livros;";
            $valores = $db->query($sql);
            $db=null;
            foreach ($valores as $objeto) {
                echo"
                <div class='livro'>
                        <div class='cardResul'>
                            <img src='../../imagens/capas/".$objeto['capa']."' alt='' >
                            <article class='infosCardResul'>
                                <div class='infosCardDados'>
                                    <p> <span class='enfase'>Título: </span>".$objeto['titulo']."</p>
                                    <p><span class='enfase'>Autor: </span>".$objeto['autor']."</p>
                                    <p> <span class='enfase'>Genero: </span>".$objeto['genero']."</p>
                                    <p> <span class='enfase'>Nº de páginas: </span>".$objeto['npags']."</p>
                                    <p> <span class='enfase'>Editora: </span>".$objeto['editora']."</p>
                                    <p> <span class='enfase'>Status: </span> <img class='simboloDisponibilidade' src='../../imagens/".$objeto['estado'].".png'>".$objeto['estado']."</p>
                                </div>
                                <p class='sinopse'> <span class='enfase'>Sinópse: </span>".$objeto['sinopse']."</p>
                            </article>
                        </div>
                        <div class='botoes'>
                            <button type='button' class='btn btn-primary update' data-valor='".$objeto['id']."'>Primary</button>
                            <button type='button' class='btn btn-danger apagar' data-valor='".$objeto['id']."'>apagar</button>
                        </div>
                    </div>";
            }
        }
        public function explorarProcura($tipo, $chave) {
            $chave = '%' . $chave . '%';
            $db = new ConexaoPdo;
            $db = $db->conectar();


            $sql = "SELECT * FROM livros where $tipo LIKE :chave";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':chave', $chave);
            $stmt->execute();


            $valores = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            if (!empty($valores)) {
                foreach ($valores as $objeto) {
                    echo"
                    <div class='cardResul'>
                        <img src='../../imagens/capas/".$objeto['capa']."' alt='' >
                        <article class='infosCardResul'>
                            <div class='infosCardDados'>
                                <p> <span class='enfase'>Título: </span>".$objeto['titulo']."</p>
                                <p><span class='enfase'>Autor: </span>".$objeto['autor']."</p>
                                <p> <span class='enfase'>Genero: </span>".$objeto['genero']."</p>
                                <p> <span class='enfase'>Nº de páginas: </span>".$objeto['npags']."</p>
                                <p> <span class='enfase'>Editora: </span>".$objeto['editora']."</p>
                                <p> <span class='enfase'>Status: </span> <img class='simboloDisponibilidade' src='../../imagens/".$objeto['estado'].".png'>".$objeto['estado']."</p>
                            </div>
                            <p class='sinopse'> <span class='enfase'>Sinópse: </span>".$objeto['sinopse']."</p>
                        </article>
                    </div>";
                }
                $db=null;
            }else{
                echo"
                <div class='alerta'>
                    <p>
                        Nenhum livro encontrado com os dados pesquisados, pesquisa geral feita
                    </p>
                </div>";

            $sql = "SELECT * FROM livros;";
            $valores = $db->query($sql);
            $db=null;
            foreach ($valores as $objeto) {
                echo"
                <div class='cardResul'>
                    <img src='../../imagens/capas/".$objeto['capa']."' alt='' >
                    <article class='infosCardResul'>
                        <div class='infosCardDados'>
                            <p> <span class='enfase'>Título:</span>".$objeto['titulo']."</p>
                            <p><span class='enfase'>Autor:</span>".$objeto['autor']."</p>
                            <p> <span class='enfase'>Genero:</span>".$objeto['genero']."</p>
                            <p> <span class='enfase'>Nº de páginas:</span>".$objeto['npags']."</p>
                            <p> <span class='enfase'>Editora:</span>".$objeto['editora']."</p>
                            <p> <span class='enfase'>Status:</span> <img class='simboloDisponibilidade' src='../../imagens/".$objeto['estado'].".png'>".$objeto['estado']."</p>
                        </div>
                        <p class='sinopse'> <span class='enfase'>Sinópse:</span>".$objeto['sinopse']."</p>
                    </article>
                </div>";
            }
            }
        }
        public function explorarTudo(){
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "SELECT * FROM livros;";
            $valores = $db->query($sql);
            $db=null;
            foreach ($valores as $objeto) {
                echo"
                <div class='cardResul'>
                    <img src='../../imagens/capas/".$objeto['capa']."' alt='' >
                    <article class='infosCardResul'>
                        <div class='infosCardDados'>
                            <p> <span class='enfase'>Título:</span>".$objeto['titulo']."</p>
                            <p><span class='enfase'>Autor:</span>".$objeto['autor']."</p>
                            <p> <span class='enfase'>Genero:</span>".$objeto['genero']."</p>
                            <p> <span class='enfase'>Nº de páginas:</span>".$objeto['npags']."</p>
                            <p> <span class='enfase'>Editora:</span>".$objeto['editora']."</p>
                            <p> <span class='enfase'>Status:</span> <img class='simboloDisponibilidade' src='../../imagens/".$objeto['estado'].".png'>".$objeto['estado']."</p>
                        </div>
                        <p class='sinopse'> <span class='enfase'>Sinópse:</span>".$objeto['sinopse']."</p>
                    </article>
                </div>";
            }
        }
    }