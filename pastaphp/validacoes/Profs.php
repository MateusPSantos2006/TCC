<?php
    namespace TCC\validacoes;
    use TCC\banco\abstratos\AbstractV as V;

    class Profs extends V {
        public function extras() {
            $this->dadosArray[1] = filter_var($this->dadosArray[1], FILTER_SANITIZE_NUMBER_INT);
            $this->dadosArray[1] = $this->dadosArray[1] != 1 ? 0 : 1;
            $this->dadosArray[3] = password_hash($this->dadosArray[3], PASSWORD_DEFAULT);
        }
    }
    