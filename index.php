<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto-Filmes</title>
        <style>
        body  {
            background-image: url("/Projeto_Filme/fundo-do-site.png");
            background-size: cover;
        }
        </style>
    </head>
    <body>
        <?php
        echo '-------------------------------------------------</br>';
        echo 'Programa desenvolvido por: Ramon Cintas Gomes</br>';
        echo '-------------------------------------------------</br>';
        echo 'Sobre o programa:</br>';
        echo 'Este programa é um projeto desenvolvido com o tema de filme durante as aulas de programação web para a comprovação de aprendizagem.</br>';
        echo '-------------------------------------------------</br>';
        echo 'Tema: Filme.</br>';
        echo '-------------------------------------------------</br>';
        echo 'Formulário para cadastrar filme.</br>';
        echo '-------------------------------------------------</br>';
        echo '*********************************************************************************************************************</br>';
        ?>
    <div>
    <form class="posicao" name="formulario" action="create.php" method="POST">
        <input type="string" id="tamanho" class="form-control " name="stringNome" placeholder="Nome do filme">
        <input type="string" id="tamanho" class="form-control " name="stringProdutor" placeholder="Produtor do filme">
        <input type="string" id="tamanho" class="form-control " name="stringAtores" placeholder="Personagem principal">
            <select name="EscolhaoGenero" required="required">
                <option value="">Escolha o gênero</option>
                <option value="Ação">Ação</option>
                <option value="Aventura">Aventura</option>
                <option value="Biográfico">Biográfico</option>
                <option value="Comédia">Comédia</option>
                <option value="Comédia dramática">Comédia dramática</option>
                <option value="Comédia romântica">Comédia romântica</option>
                <option value="Documentário">Documentário</option>
                <option value="Drama">Drama</option>
                <option value="Fantasia">Fantasia</option>
                <option value="Ficção científica">Ficção científica</option>
                <option value="Histórico">Histórico</option>
                <option value="Musical">Musical</option>
                <option value="Romance">Romance</option>
                <option value="Suspense">Suspense</option>
                <option value="Terror">Terror</option>
            </select>
            <tr>
                <td width="118">
                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Data de lançamento:</font>
                </td>
                <td width="460">
                    <input name="DataLancamento" type="date" class="formbutton" id="nome" size="40" maxlength="150">
                </td>
            </tr>
            <?php
            echo '</br>';
            ?>
            <tr>
                <td>
                    <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Comente sobre o filme:</font>
                </td>
                <?php
                echo '</br>';
                ?>
                <td rowspan="2">
                    <font size="2">
                        <textarea name="stringMensagem" cols="119" rows="2" class="formbutton" id="mensagem" input></textarea>
                    </font>
                </td>
            </tr>
        <input type="submit" class="btn btn-primary" value=" Cadastrar">
        <input name="Reset" type="reset" class="formobjects" value="Limpar campos"> 
    </form>
    </div>
        <?php 
        echo '*********************************************************************************************************************</br>';
        ?>
    </body>
</html>