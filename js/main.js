function validate()
{

// DECLARAÇÃO DE VARIÁVEIS
    let nome_prod_validate = cadastro.nome_prod.value;
    let preco_validate = cadastro.preco.value;
// TESTE DOS VALORES RECEBIDOS

// Nome do Produto
    if(nome_prod_validate == "")
    {
        alert("!Preencha o campo NOME!");
        return false;
    }

    // Preço
    if(preco_validate == "")
    {
        alert("!Preencha o campo PREÇO!");
        return false;
    }

    return true;
}