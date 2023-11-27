<?php
    namespace TCC\validacoes;
    use TCC\banco\abstratos\AbstractV as V;

    class Livro extends V {
        public function setCapa($imagemCapa) {
            try {
                $tipo = mime_content_type($imagemCapa['tmp_name']);
                if ($tipo == 'image/jpeg' || $tipo == 'image/jpg' || $tipo == 'image/png') {
                    $this->dadosArray[9] = uniqid() . "." . pathinfo($imagemCapa['name'], PATHINFO_EXTENSION);
                        move_uploaded_file($imagemCapa["tmp_name"], __DIR__ . "/../../imagens/capas/" . $this->dadosArray[9]);
                } else {
                    $this->dadosArray[9] = "placeholderCapa.jpg";
                }
            } catch (\Exception $erro) {
                echo $erro->getMessage();
            }

        }
    }