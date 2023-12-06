<?php 
    require_once "../../vendor/autoload.php";
    require_once "../../pastaphp/operacoes/verificarCookie.php";
    use TCC\banco\livros\Ler;
    
    $dados = new Ler;
    $dadosAntigos = $dados->verDadosCru($_COOKIE["idAlvo"]);

    foreach ($dadosAntigos as $objeto) {
        $dispInd = "indisponivel";
        $dispPerd = "perdido";

        if ($objeto['estado'] == "indisponivel") {
            $dispInd = "disponivel";
        }
        if ($objeto['estado'] == "perdido") {
            $dispPerd = "disponivel";
        }
        ?>
    <h1 class="titulo">
        Alteração do livro
    </h1>

    <div class="alerta">
        <p>
            Caso não deseje alterar a capa, deixe o campo de arquivo vazio.
        </p>
    </div>

    <form action="../../pastaphp/operacoes/updateLivro.php" method="post" enctype="multipart/form-data" id="cadastroLivro">
        <input type="hidden" name="id" value="<?=$objeto['id']?>">
        <div class="coluna" id="coluna1">
            <div class="input-group mb-3">
                <label class="input-group-text" for="titulo">Nome do Livro</label>
                <input type="text" required class="form-control" id="titulo" value="<?=$objeto['titulo']?>" aria-label="titulo" aria-describedby="Escreva o título do livro" name="nomeLivro">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="genero">Gênero do livro</label>
                <input type="text" required class="form-control" id="genero" value="<?=$objeto['genero']?>" aria-label="generôs do livro" aria-describedby="Todos os gêneros do livro, insira cada um separado por hífen" name="genero">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="publicado">Publicado em</label>
                <input type="number" required class="form-control" id="publicado" value="2000" aria-label="Ano de publicação" aria-describedby="Ano em que foi publicado" name="publicado">
            </div>
        </div>
        <div class="coluna" id="coluna2">
            <div class="input-group mb-3">
                <label class="input-group-text" for="nomeAutor">Nome do autor</label>
                <input type="text" required class="form-control" id="nomeAutor" value="<?=$objeto['autor']?>" aria-label="nome" aria-describedby="Escreva o nome do autor" name="nomeAutor">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="editora">Editora</label>
                <input type="text" required class="form-control" id="editora" value="<?=$objeto['editora']?>" aria-label="Editora do livro" aria-describedby="A editora que trabalhou no livro" name="editora">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="npags">Nº de páginas</label>
                <input type="number" required class="form-control" id="npags" value="<?=$objeto['npags']?>" aria-label="Número de páginas" aria-describedby="Número total de páginas no livro" name="npags">
            </div>
        </div>
        <div id="base">
            <div id="areaSinopse">
                <div class="input-group">
                    <label class="input-group-text" id="labelSinopse" for="sinopse">Escreva a sinópse do livro</label>
                    <textarea class="form-control" required name="sinopse" rows="6" aria-label="With textarea" id="sinopse"><?=$objeto['sinopse']?></textarea>
                </div>
            </div>
            
            <div id="areaResto">
                <div class="input-group mb-3">
                    <select required class="form-select" aria-label="Default select example" name="disponibilidade">
                        <option selected value="<?=$objeto['estado']?>"><?=$objeto['estado']?></option>
                        <option value="<?=$dispInd?>"><?=$dispInd?></option>
                        <option value="<?=$dispPerd?>"><?=$dispPerd?></option>
                    </select>
                </div>



                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Capa do livro</label>
                    <input type="file" name="capa" class="form-control" id="inputGroupFile01" accept="image/*">
                </div>

                

                <div id="areaRestoBotoes">
                    <button type="submit" class="btn btn-success">Confirmar</button>
                </div>
            </div>         
        </div>
    </form>
        <?php
        }
