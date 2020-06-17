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

if(empty($nome)){
    echo "o nome não pode ser vazio";
    return;
}

if(strlen($nome) <= 3){
    echo "O nome deve conter mais de 3 letras";
    return;
} else if(strlen($nome)>50){
    echo "o nome ta luito extenso";
    return;
}
if (!is_numeric($idade)){
    echo "A idade não é do tipo numerico, informe uma idade correta";
    return;    
}



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
