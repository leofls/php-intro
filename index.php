<?php     
    include "servicos/servicosMensagemSessao.php"
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta author ="LeandroF.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width-device-width, initial-scale:1">
<head>
<body>
    <p>Formulario para Inscrição</p>
    <form action="script.php" method="post">
        <?php
            $menssagemDeSucesso = obterMensagemSucesso();
            if(!empty($menssagemDeSucesso)){
                echo $menssagemDeSucesso;
            }
            $menssagemDeErro = obterMensagemErro();
            if(!empty($menssagemDeErro)){
                echo "<p style='color: red'>".$menssagemDeErro. " </p> ";
            }
        ?>
        <p>Nome: <input type="text" name="nome"> </p>
        <p>Idade: <input type="text" name="idade"> </p>
        <p> <input type="submit"> </p>
    </form>
</body>
</html>