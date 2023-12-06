<?php
    require_once "../../vendor/autoload.php";
    require_once "../../pastaphp/operacoes/verificarCookie.php";
    use TCC\banco\profs\Ler;

    $dados = new Ler;
    $dadosAntigos = $dados->verDadosCru($_COOKIE["idAlvo"], "profs");

    foreach ($dadosAntigos as $prof) {
        ?>
        <form action="../../pastaphp/operacoes/createProfs.php" method="post" >
            <h1>Cadastrar</h1>
            <div class="input-box">
            <div class="input-field">
                <input type="text" placeholder="Nome Completo"  name="nome" required><i class='bx bxs-user'></i>
            </div>
            <div class="input-field">
                <select class="form-select" id="inputGroupSelect01" name="adm" required>
                <option value="0">Professor(a)</option>
                <option value="1">Administrador(a)</option>

                </select>
            </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="RA" required name="ra">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Senha" required name="senha">
                </div>
                <button type="submit" class="botao">Editar</button>
            </div>
        </form>
        <?php
    }