<?php
$banco = "banco.txt";
if(isset($_POST['codigo'])){
    if(file_exists($banco) && !empty(file_get_contents($banco))){
        $lista = explode("\n", file_get_contents($banco));
        $informacoes = 6;
        $conjunto = $informacoes*($_POST['codigo']-1);

        $lista[$conjunto] = $_POST['stringNome'];
        $lista[$conjunto+1] = $_POST['stringProdutor'];
        $lista[$conjunto+2] = $_POST['stringAtores'];
        $lista[$conjunto+3] = $_POST['EscolhaoGenero'];
        $lista[$conjunto+4] = $_POST['DataLancamento'];
        $lista[$conjunto+5] = str_replace("\n", "<br>", $_POST['stringMensagem']);

        for ($i=0;$i<count($lista)-1;$i++) { $texto.=$lista[$i] . "\n";}

        unlink($banco);
        $criar = fopen($banco, "a+");
        fwrite($criar, $texto);
        fclose($criar);
        header('Location: http://rcg.infinityfreeapp.com/Projeto_Filme/select.php#'.$_POST['codigo']);

    }
}
?>