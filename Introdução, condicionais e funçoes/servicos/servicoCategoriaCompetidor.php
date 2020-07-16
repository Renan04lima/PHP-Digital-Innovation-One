<?php


function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = []; // array numérico
    $categorias[] = 'infantil';
    $categorias[] = 'adolescentes';
    $categorias[] = 'adulto';

    if (validaNome($nome) && validaIdade($idade)) {
        removerMensagemErro();
        if ($idade >= 6 && $idade <= 12) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'infantil') {
                    setarMensagemSucesso("O " . $nome . " pertence a categoria " . $categorias[$i]);
                    return null;
                }
            }

        } else if ($idade >= 13 && $idade <= 18) {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adolescentes') {
                    setarMensagemSucesso("O " . $nome . " pertence a categoria " . $categorias[$i]);
                    return null;
                }
            }
        } else {
            for ($i = 0; $i <= count($categorias); $i++) {
                if ($categorias[$i] == 'adulto') {
                    setarMensagemSucesso("O " . $nome . " pertence a categoria " . $categorias[$i]);
                    return null;
                }
            }
        }
    }else{
        removerMensagemSucesso();
        return obterMensagemErro();
    }
}