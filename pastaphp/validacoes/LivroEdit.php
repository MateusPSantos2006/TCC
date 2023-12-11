<?php
    namespace TCC\validacoes;
    use TCC\banco\abstratos\AbstractV as V;

    class LivroEdit extends V {
        public function extras() {
            $this->dadosArray[3] = filter_var($this->dadosArray[3], FILTER_SANITIZE_NUMBER_INT);
            $this->dadosArray[6] = filter_var($this->dadosArray[6], FILTER_SANITIZE_NUMBER_INT);
        }
        
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