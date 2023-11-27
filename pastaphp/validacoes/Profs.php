<?php
    namespace TCC\validacoes;
    use TCC\banco\abstratos\AbstractV as V;

    class Profs extends V {
        public function extras() {
            print_r($this->dadosArray[1]);
            if ($this->dadosArray[1] != 1) {
                echo "<br> professor";
                $this->dadosArray[1] = 0;
            }
            $this->dadosArray[3] = password_hash($this->dadosArray[3], PASSWORD_DEFAULT);
        }
    }
    