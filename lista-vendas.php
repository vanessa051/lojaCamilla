<?php 
    include("./cabecalho.php");
    include("./conecta.php");
    include("./banco-produto.php");
    include ("./logica-usuario.php");
    //include ("./email-compra.php");
    //include("./logica-compra.php");
    verificaUsuario();
?>   

    <?php   
        if(isset($_GET["zeroOuMenorOuNada"]) && $_GET["zeroOuMenorOuNada"] == true){?>
            <p class="alert-danger">É necessário digitar uma quantidade diferente de zero e positiva de produtos para que a compra seja efetuada !</p>
    <?php
        }
    ?>


    <?php   
        if(isset($_GET["maiorQueVinte"]) && $_GET["maiorQueVinte"] == true){?>
            <p class="alert-danger">Quantidade desejada maior que a disponível em estoque!</p>
    <?php
        }
    ?>

    <?php   
        if(isset($_GET["compraSucesso"]) && $_GET["compraSucesso"] == true){?>
            <p class="alert-success">Compra feita com SUCESSO!</p>
            <p class="alert-success">Você receberá um email com as informações da compra!</p>
            
    <?php
        }
    ?>

    <h1>VENDAS</h1> <br>
    <table class="table table-striped table-bordered">
        <tr>
            <td><h3>PRODUTO</h3></td>   
            <td><h3>PREÇO</h3></td>  
            <td><h3>QTD ESTOQUE</h3></td>    
            <td><h3>DESCRIÇÃO</h3></td>
            <td><a class="btn btn-danger" href="./index.php" class="text-danger">FINALIZAR</a></tr>
        </tr>

        <?php
            $produtos = listaProdutos($conexao);
            foreach ($produtos as $produto) : 
        ?>  

        <tr>              
            <td><?php echo $produto['nome']; ?></td>       
            <td><?php echo $produto['preco']. "</br>";?></td>
            <td><?php echo $produto['qtdest']. "</br>";?></td>
            <td><?php echo substr ($produto['descricao'], 0, 20); ?></td>

    
        <td><a class="btn btn-primary" href="./formulario-compra.php?id=<?php echo $produto['id'];?>" class="text-danger">COMPRAR</a>
        </tr>  

        <?php

            endforeach
                
        ?>  

    </table>     

<?php include("rodape.php");?>