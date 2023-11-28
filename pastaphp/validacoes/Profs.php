<?php
    namespace TCC\validacoes;
    use TCC\banco\abstratos\AbstractV as V;

    class Profs extends V {
        public function extras() {
            if ($this->dadosArray[1] != 1) {
                $this->dadosArray[1] = 0;
            }
            $this->dadosArray[3] = password_hash($this->dadosArray[3], PASSWORD_DEFAULT);
        }
    }
    