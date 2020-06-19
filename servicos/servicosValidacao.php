<?php

//faz com que tenha uma checagem de tipo mais rigida 
// declare('strict_types = 1');

function validaNome(string $nome) : bool{
    if(empty($nome)){
        setarMensagemErro("O nome não pode ser vazio, digite-o corretamente");
        return false;
    } else if(strlen($nome) <= 3){
        setarMensagemErro("O nome deve conter mais de 3 letras");
        return false;
    } else if(strlen($nome)>50){
        setarMensagemErro("o nome ta luito extenso");
        return false;
    } 
    return true;
}

function validaIdade(string $idade): bool{
    if (empty($idade)){

        setarMensagemErro( "A idade está vazia, informe uma idade correta");
        return false;
    } else if (!is_numeric($idade)){
        setarMensagemErro( "A idade ".$idade. " não é do tipo numerico, informe uma idade correta");
        return false;
    }
    return true;
}


?>