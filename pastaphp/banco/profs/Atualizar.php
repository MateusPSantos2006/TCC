<?php
    namespace TCC\banco\profs;
    
    use TCC\banco\ConexaoPdo;
    use TCC\banco\abstratos\AbstractU as U;

    class Atualizar extends U{
        public function update() {
            $db = new ConexaoPdo;
            $db = $db->conectar();

            $trocaSenha = $this->valoresNovos[4] != null ? true : false;
            if ($trocaSenha) {
                $sql = "UPDATE profs 
                SET nome = :nome, senha = :senha, adm = :adm, ra = :ra
                WHERE id = :idAlvo";

                $stmt = $db->prepare($sql);
                $stmt->bindParam(':nome', $this->valoresNovos[1]);
                $stmt->bindParam(':adm', $this->valoresNovos[2]);
                $stmt->bindParam(':ra', $this->valoresNovos[3]);
                $stmt->bindParam(':senha', $this->valoresNovos[4]); 
                $stmt->bindParam(':idAlvo', $this->idAlvo);
                $stmt->execute();
            }else{
                $sql = "UPDATE profs 
                SET nome = :nome, adm = :adm, ra = :ra
                WHERE id = :idAlvo";

                $stmt = $db->prepare($sql);
                $stmt->bindParam(':nome', $this->valoresNovos[1]);
                $stmt->bindParam(':adm', $this->valoresNovos[2]);
                $stmt->bindParam(':ra', $this->valoresNovos[3]);
                $stmt->bindParam(':idAlvo', $this->idAlvo);
                $stmt->execute();
            }
            $db=null;
        }

        public function toggle(){
            try {
                $db = new ConexaoPdo;
                $db = $db->conectar();
    
                $sql = "UPDATE profs 
                SET ativo = :ativo
                WHERE id = :idAlvo";
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':ativo', $this->valoresNovos); 
                $stmt->bindParam(':idAlvo', $this->idAlvo);
                $stmt->execute();
    
                $db=null;
            } catch (\Exception $erro) {
                echo $erro;
            }
        }
    }