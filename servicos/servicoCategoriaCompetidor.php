<?php



function defineCategoraCompetidor($nome, $idade) : ?string
{
    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolecente';
    $categorias[] = 'adulto';
    $categorias[] = 'idoso';

    
    if(validaNome($nome)&& validaIdade($idade)){
        
        removerMenssagemErro();
        
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == "infantil"){
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else if ($idade >= 13 && $idade <= 18) {
    
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adolecente'){
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }    
            }
        } else {
    
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adulto'){
                    setarMensagemSucesso("O nadador " . $nome . " compete na categoria " . $categorias[$i]);
                    return null;
                }
            }
        }
    }else {
        removerMenssagemSuceso();
        return obterMensagemErro();
    }
    
}
