<?php
$banco = "banco.txt";
/* cocatenando as variaveis, ou seja, juntar tudo em uma unica linha
   $a."\n".$b."\n".$c."\n."$d ."\n".$e ."\n".*/

# criando uma string com o conteudo capturado do formulário
$conteudo = $_POST["stringNome"] . "\n" . $_POST["stringProdutor"] . "\n" . $_POST["stringAtores"] . "\n" . $_POST["EscolhaoGenero"] . "\n" . $_POST["DataLancamento"] . "\n" . str_replace("\n", "<br>", $_POST["stringMensagem"]) . "\n";

                   
/*A variável $criar usa a função fopen "a+" Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.*/

$criar = fopen($banco, "a+");

#A função fwrite escrever os dados capturados do formuário no arquivo texto
fwrite($criar, $conteudo);

# condicional ´´para verificar se o arquivo txt exite mandando mensagem para o usuário
if ($criar == true) {
    echo "<script language='javascript' type='text/javascript'> 
            alert('Dados cadastrados com sucesso!')</script>";
            header('Location: /Projeto_Filme/select.php#');
            die();
} else {
    echo "<script language='javascript' type='text/javascript'> 
            alert('Erro ao cadastrar os dados!')</script>";
            header('Location: /Projeto_Filme/select.php#');
            die();
}
#A função fclose fecha o arquivo depois de manipulado
fclose($criar);
# A função header redireciona para a página index.php
#header('Location: /crudtxt/index.php');

/*

O parâmetro que especifica o tipo de acesso ao arquivo texto:

Lista dos possíveis modos de fopen() utilizando mode
mode     Descrição
'r'	Abre somente para leitura; coloca o ponteiro do arquivo no começo do arquivo.
'r+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo.
'w'	Abre somente para escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
'w+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no começo do arquivo e reduz o comprimento do arquivo para zero. Se o arquivo não existir, tenta criá-lo.
'a'	Abre somente para escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
'a+'	Abre para leitura e escrita; coloca o ponteiro do arquivo no final do arquivo. Se o arquivo não existir, tenta criá-lo.
'x'	Cria e abre o arquivo somente para escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).
'x+'	Cria e abre o arquivo para leitura e escrita; coloca o ponteiro no começo do arquivo. Se o arquivo já existir, a chamada a fopen() falhará, retornando false e gerando um erro de nível E_WARNING. Se o arquivo não existir, tenta criá-lo. Isto é equivalente a especificar as flags O_EXCL|O_CREAT para a chamada de sistema open(2).

*/