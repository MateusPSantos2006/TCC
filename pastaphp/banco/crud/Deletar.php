<?php
    namespace TCC\banco\crud;
    use TCC\banco\ConexaoPdo;

    class Deletar {
        private $idAlvo;

        public function __construct($idSelecionado)
        {
            $this->idAlvo = $idSelecionado;
        }

        public function excluirLivro () {
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $sql = "DELETE FROM livros WHERE id = :idAlvo";

            $stmt = $db->prepare($sql);
            $stmt->bindParam(':idAlvo', $this->idAlvo);
            $stmt->execute();

            $db=null;
        }
    }