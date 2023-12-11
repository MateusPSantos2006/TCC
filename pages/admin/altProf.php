<?php
    if (!isset($_COOKIE["idAlvo"]) || is_int($_COOKIE["idAlvo"])) {
      header('Location: ../public/erro.html'); 
      exit(); 
    }
    require_once "../../vendor/autoload.php";
    require_once "../../pastaphp/operacoes/verificarCookie.php";
    use TCC\banco\profs\Ler;

    $dados = new Ler;
    $dadosAntigos = $dados->verDadosCru($_COOKIE["idAlvo"]);
    setcookie("idAlvo", "", time() - 3600, "/");
    $admin = array(
        0 => "Administrador(a)",
        1 => "Professor(a)",
        2 => 1,
        3 => 0
    );
    $professor = array(
        0 => "Professor(a)",
        1 => "Administrador(a)",
        2 => 0,
        3 => 1
    );
    foreach ($dadosAntigos as $prof) {
        $cargo = $prof["adm"] == 1 ? $admin : $professor;
        ?>
        <div class="quase-tudo">
    <div class="wrapper">
      <form action="../../pastaphp/operacoes/updateProfs.php" method="post" >
        <h1>Alteração de <?=$prof["nome"]?></h1>
        <input type="hidden" name="id" value="<?=$prof["id"]?>">
        <div class="input-box">
          <div class="input-field">
            <input type="text" value="<?=$prof["nome"]?>"  name="nome" required><i class='bx bxs-user'></i>
          </div>
          <div class="input-field">
            <select class="form-select" id="inputGroupSelect01" name="adm" required>
              <option value="<?=$cargo[2]?>"><?=$cargo[0]?></option>
              <option value="<?=$cargo[3]?>"><?=$cargo[1]?></option>

            </select>
          </div>
        </div>
        <div class="input-box">
          <div class="input-field">
            <input type="text" value="<?=$prof["ra"]?>" required name="ra">
          </div>
          <div class="input-field">
            <input type="text" placeholder="Digite nova senha" name="senha">
          </div><button type="submit" class="botao">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
        <?php
    }