<?php
    namespace TCC\validacoes;
    use TCC\banco\abstratos\AbstractV as V;

    class ProfEdit extends V {
        public function extras() {
            $this->dadosArray[2] = filter_var($this->dadosArray[2], FILTER_SANITIZE_NUMBER_INT);
            $this->dadosArray[2] = $this->dadosArray[2] == 1 ? 1 : 0;
            if (isset($this->dadosArray[4]) && $this->dadosArray[4] != null) {
                $this->dadosArray[4] = password_hash($this->dadosArray[4], PASSWORD_DEFAULT);
            }
        }
    }