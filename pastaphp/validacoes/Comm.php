<?php 
    namespace TCC\validacoes;
    use TCC\banco\abstratos\AbstractV as V;

    class Comm extends V {
        public function extras() {
            $this->dadosArray[1] = filter_var($this->dadosArray[1], FILTER_SANITIZE_NUMBER_INT);
            $this->dadosArray[2] = filter_var($this->dadosArray[2], FILTER_SANITIZE_NUMBER_INT);
            $this->dadosArray[3] = date("j/n/Y - H:i");
        }
    }