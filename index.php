<?php 

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

// //print_r($categorias);
// //foreach($array as $indice => $valor_do_Array)
// foreach ($categorias as $key => $value) {
//     # code...
//     print($key);
//     echo "<br>";
//     //echo " {$key} => {$value} <br> ";
// }

$nome = "Leandro";
$idade = 8;
//Var_dump($variavel) verifica qual o tipo da variavel
// var_dump($nome);

if($idade >= 6 && $idade <=12){
    
    for($i = 0; $i<= count($categorias); $i++){
        if($categorias[$i] == "infantil")
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
    
} else if ($idade >= 13 && $idade <=18) {
  
    for($i = 0; $i<= count($categorias); $i++){
        if($categorias[$i] == 'adolecente')
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
} else {
    
    for($i = 0; $i<= count($categorias); $i++){
        if($categorias[$i] == 'adulto')
            echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
}