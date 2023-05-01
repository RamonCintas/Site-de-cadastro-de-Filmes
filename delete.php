<?php
if (isset($_GET['codigo'])){
    $banco = "banco.txt";
    $informacoes = 6; //quantidade de informações. Neste caso tem 4: Nome, Email, Data e Mensagem
    $lista = explode("\n", file_get_contents($banco)); //transforma o banco.txt em um array, sendo um elemento para cada linha no .txt

    array_splice($lista, $informacoes*($_GET['codigo']-1), $informacoes); //a função está recebendo 3 coisas nesta ordem: o array que queremos usar, a partir de qual elemento queremos apagar elementos, quantos elementos queremos apagar

    //for ($i = 0 ; $i <= $informações; $i++){ unset($linhaParaDeletar+$i); }

    for ($i = 0; $i < count($lista)-1; $i++){ $texto .= $lista[$i] . "\n"; }

    unlink($banco); //apaga o arquivo do diretório
    $criar = fopen($banco, "a+"); //cria um novo com o mesmo nome á com a permissão de escrita ("a+")
    fwrite($criar, $texto); //escreve no arquivo criado exatamente o que foi colocado na variável $texto
    fclose($criar); //"fecha" o arquivo para o apache //volta para a página de delete sem a atribuição do $_GET na URL;
}
header('Location: /Projeto_Filme/select.php#');
die();
?>