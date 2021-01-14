<?php
	include("./formulario-compra.php"); //precisa somente desse para funcionar
    include("./logica-usuario.php");

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $qtdComprada = $_POST["qtdCompra"];
    $preco = $_POST["preco"]; 

    function enviaEmailCompras($nome, $descricao, $preco, $qtdComprada){
        $valor_total = $preco*$qtdComprada;
        
        $email_cliente = usuarioLogado();
        $data_envio = date("d/m/Y");

        $assunto = "Sumário de Compras na Lojinha da Camilla";


        //Corpo do texto, como variável
        $corpo_mensagem = utf8_encode(
            "
                Email Cliente:  $email_cliente 
                Data de Envio:  $data_envio 
                Olá! seguem os itens referentes a sua compra na Lojinha da Camilla \n
                PRODUTO COMPRADO:  $nome  
                PREÇO:  $preco
                QTD COMPRADA: $qtdComprada
                DESCRIÇÃO: $descricao
                VALOR TOTAL DA COMPRA: $valor_total R$
            "      
        );

        mail($email_cliente, $assunto, $corpo_mensagem);
    }        

  

    if ($qtdComprada <= 0 || $qtdComprada == ""){
        echo"<script>location.href='lista-vendas.php?zeroOuMenorOuNada=true'</script>";
        //header("Location:lista-vendas.php?zeroOuMenorOuNada=true");
       
    }
    if ($qtdComprada>20) {
        echo"<script>location.href='lista-vendas.php?maiorQueVinte=true'</script>";
        //header("Location:lista-vendas.php?maiorQueVinte=true");
    }
    if ($qtdComprada > 0 && $qtdComprada <= 20){
        enviaEmailCompras($nome, $descricao, $preco, $qtdComprada);
        echo"<script>location.href='lista-vendas.php?compraSucesso=true'</script>";
       // header("Location:lista-vendas.php?compraSucesso=true");
    }
    die();

?>
