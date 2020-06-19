<?php

session_start();

//mensagem de erro
function setarMensagemErro(string $mensagem): void {
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro() : ?string {
    if(isset($_SESSION['mensagem-de-erro'])){
        return $_SESSION['mensagem-de-erro'];
    }
    return null;
}

function removerMenssagemErro(): void{
    if(isset($_SESSION['mensagem-de-erro'])){
        unset($_SESSION['mensagem-de-erro']);
    }
}

//mensagem de sucesso
function setarMensagemSucesso(string $mensagem): void {
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}
function obterMensagemSucesso() : ?string {
    if(isset($_SESSION['mensagem-de-sucesso'])){
        return $_SESSION['mensagem-de-sucesso'];
    }
    return null;
} 

function removerMenssagemSuceso(): void{
    if(isset($_SESSION['mensagem-de-sucesso'])){
        unset($_SESSION['mensagem-de-sucesso']);
    }
}