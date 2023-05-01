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
    $banco = "banco.txt";
    echo "<CENTER>Registros de filmes cadastrados na base de dados.<br></CENTER> ";
    echo "</br>";
    if (file_exists($banco) && !empty(file_get_contents($banco))) {
        $lista = explode("\n", file_get_contents($banco));
        $informacoes = 6; 
        unset($lista[count($lista) - 1]);
        $conjunto = 1;
        echo "<center><table border=1>";
        date_default_timezone_set('America/Sao_Paulo');
        echo "<meta charset='UTF-8'>";
        echo "<tr><th>Código</th><th>Nome do filme</th><th>Produtor</th><th>Personagem principal</th><th>Gênero</th><th>Data de lançamento</th><th>Comentário</th><th>Ações</th></tr>";
        for ($i = 0; $i < count($lista); $i += $informacoes) {
            echo "<tr>";
            echo "<td id='$conjunto'>$conjunto</td>";
            for($j=$i; $j < $i + $informacoes; $j++){
                echo "<td>{$lista[$j]}</td>";
            }
            echo "<td>
                <a href='/Projeto_Filme/delete.php?codigo=$conjunto'><img src='/Projeto_Filme/delete_crud.png' width = '25' height = '25' alt='Deletar' title='Deletar registro'></a>
                <a href='/Projeto_Filme/montar.php?codigo=$conjunto'><img src='/Projeto_Filme/update_crud.png' width = '25' height = '25' alt='Atualizar' title='Atualizar registro'></a>
                <a href='/Projeto_Filme/index.php'><img src='/Projeto_Filme/insert_crud.png' width = '25' height = '25' alt='Inserir' title='Inserir registro'></a>
                </td>";
            echo "</tr>";
            $conjunto++;
        }
        echo "</table>";
        echo "<footer id='footer'>";
        echo "</footer>";
    } else {
        echo "<br><br><p align=center>Ainda não há nenhum registro!</p";
    }
    ?>
    </body>
</html>