<?php
    namespace TCC\banco\posts;
    use TCC\banco\ConexaoPdo;

    class Ler {
        public function getDadosPost($pagina){
            try{
                $limite = 5;
                $inicio = ($pagina * $limite) - $limite;

                $db = new ConexaoPdo;
                $db = $db->conectar();
    
                $sql = "SELECT texto, dataEnvio, nome, titulo, capa, posts.id, idProf 
                FROM posts
                INNER JOIN profs ON posts.idProf = profs.id
                INNER JOIN livros ON posts.idLivro = livros.id
                ORDER BY dataEnvio DESC
                LIMIT $inicio, $limite;";
                $dados = $db->query($sql);
                $db=null;
    
                return $dados;
            } catch (\Exception $erro) {
                echo "Erro ao tentar ler post";
            }
        }
        function getNumeroTotal(){
            $db = new ConexaoPdo;
            $db = $db->conectar();
    
            $sql = "SELECT COUNT(id) numero FROM posts;";
            $total = $db->query($sql)->fetch()["numero"];
            $db=null;
    
            $total = ceil($total / 5);

            return $total;
        }
    }