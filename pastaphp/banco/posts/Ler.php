<?php
    namespace TCC\banco\posts;
    if (!isset($_SESSION["model"]) || $_SESSION["model"] != true) {
        header('Location: ../../index.php'); 
        exit(); 
    }
    use TCC\banco\ConexaoPdo;

    class Ler {
        public function getDadosPost(){
            try{
                $db = new ConexaoPdo;
                $db = $db->conectar();
    
                $sql = "SELECT texto, dataEnvio, nome, titulo, capa, posts.id 
                FROM posts
                INNER JOIN profs ON posts.idProf = profs.id
                INNER JOIN livros ON posts.idLivro = livros.id
                ORDER BY dataEnvio DESC;";
                $dados = $db->query($sql);
                $db=null;
    
                return $dados;
            } catch (\Exception $erro) {
                echo "Erro ao tentar ler post";
            }
        }
    }