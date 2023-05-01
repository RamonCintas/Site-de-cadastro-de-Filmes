<!DOCTYPE html>
<html lang="en">

<head>
    <title>Site PHP</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body  {
            background-image: url("/Projeto_Filme/fundo-do-site.png");
            background-size: cover;
        }
    </style>
</head>

<body>
    <?php
    $banco= "banco.txt";
    if (isset($_GET['codigo'])) {
        if (file_exists($banco) && !empty(file_get_contents($banco))) {
            $lista = explode("\n", file_get_contents($banco));
            $informacoes = 6;
            $conjunto = $informacoes * ($_GET['codigo'] -1);

            $nome = $lista[$conjunto];
            $produtor= $lista[$conjunto + 1];
            $ator= $lista[$conjunto + 2];
            $genero= $lista[$conjunto + 3];
            $data= $lista[$conjunto + 4];
            $mensagem= str_replace("<br>", "\n", $lista[$conjunto + 5]);

        }
    }
    ?>

    <form method="post" action="update.php">
        <label for="codigo">Código:</label>

        <input type="number" id="codigo" name="codigo" placeholder="<?php echo $_GET['codigo']; ?>" value="<?php echo $_GET['codigo']; ?>" style="background-color: grey;" readonly><br>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="stringNome" placeholder="<?php echo $nome; ?>" value="<?php echo $nome; ?>" required><br>

        <label for="produtor">Produtor:</label>
        <input type="text" id="produtor" name="stringProdutor" placeholder="<?php echo $produtor; ?>" value="<?php echo $produtor; ?>" required><br>

        <label for="ator">Ator:</label>
        <input type="text" id="ator" name="stringAtores" placeholder="<?php echo $ator; ?>" value="<?php echo $ator; ?>" required><br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="EscolhaoGenero" placeholder="<?php echo $genero; ?>" value="<?php echo $genero; ?>" required><br>

        <label for="data">Data:</label>
        <input type="text" id="data" name="DataLancamento" placeholder="<?php echo $data; ?>" value="<?php echo $data; ?>" required><br>

        <label for="mensagem">Mensagem:</label>
        <textarea type="text" id="mensagem" name="stringMensagem" rows="10" cols="40"><?php echo $mensagem; ?></textarea><br>

        <input type="submit" value="Enviar">
    </form>
    <br><br><a href="http://rcg.infinityfreeapp.com/Projeto_Filme/index.php">Voltar</a>
</body>


</html>