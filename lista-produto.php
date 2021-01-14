<?php 
    include("./cabecalho.php");
    include("./conecta.php");
    include("./banco-produto.php");
    include ("./logica-usuario.php");
    verificaUsuario();
?>   


    <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
        <p class="alert-success">Produto apagado com sucesso!.</p>
    <?php } ?>
  
    <table class="table table-striped table-bordered">
        <tr>
            <td><h3>PRODUTO</h3></td>        
            <td><h3>PREÇO</h3></td>   
            <td><h3>QTD</h3></td>          
            <td><h3>DESCRIÇÃO</h3></td>
            <td><h3>CATEGORIA</h3></td>
            <td><h3>USADO</h3></td>
            <td><h3>ALTERAR</h3></td>
            <td><h3>REMOVER</h3></td>

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
            <td><?php echo $produto['categoria_nome']; ?></td>
            <td><?php echo $produto['usado'] == true ? "Usado" : "Não Usado";?></td>
            <td><a class="btn btn-primary" href="./altera-formulario-produto.php?id=<?php echo $produto['id'];?>" class="text-danger">Alterar</a>
            <td><a class="btn btn-danger" href="./remove-produto.php?id=<?php echo $produto['id'];?>" class="text-danger">Remover</a>
        </tr>  

        <?php

            endforeach
                
        ?>  

    </table>     

<?php include("rodape.php")?>