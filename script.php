<?php 

include "servicos/servicosMensagemSessao.php";
include "servicos/servicosValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

// //print_r($categorias);
// //foreach($array as $indice => $valor_do_Array)
// foreach ($categorias as $key => $value) {
    //     # code...
//     print($key);
//     echo "<br>";
//     //echo " {$key} => {$value} <br> ";
// }

/*
* é usado para recuperar dados usando GET
* menos seguro pois passa os dados pela URL
*/
 // $nome = $_GET['nome'];
// $idade = $_GET['idade'];

//é usado para recuperar dados usando POST mais seguro
$nome = $_POST['nome'];
$idade = $_POST['idade'];

//Var_dump($variavel) verifica qual o tipo da variavel
// var_dump($nome);
// var_dump($idade);

///fazer a chamada das funções de servicos

defineCategoraCompetidor($nome, $idade);
header("location: index.php");
