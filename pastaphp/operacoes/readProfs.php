<?php
    use TCC\banco\profs\Ler;

    $leitura = new Ler;
    $dados = $leitura -> getProfsRA();

    foreach ($dados as $prof) {
        $placeholder1 = "ativo";
        $placeholder2 = "desativar";
        $placeholder3 = "professor(a)";
        if ($prof["ativo"] != 1) {
            $placeholder1 = "desativo";
            $placeholder2 = "ativar";
        }
        if ($prof["adm"] == 1) {
            $placeholder3 = "administrador(a)";
        }
            ?>
            <tr>
                <th scope="row"><?=$prof["id"]?></th>
                <td><?=$prof["nome"]?></td>
                <td><?=$prof["ra"]?></td>
                <td><?=$placeholder3?></td>
                <td><?=$placeholder1?></td>
                <td>
                    <button type='button' class='btn btn-primary update' data-valor='<?=$objeto['id']?>'>modificar</button>
                    <button type='button' class='btn btn-warning <?=$placeholder2?>' data-valor='<?=$objeto['id']?>'><?=$placeholder2?></button>
                </td>
            </tr>
        <?php
    }