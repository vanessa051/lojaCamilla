<?php include("./cabecalho.php")?>
<?php include("./conecta.php")?>
<?php include("./banco-categoria.php")?>

    <?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
        <p class="alert-success">Categoria removida com sucesso!.</p>
    <?php } ?>
        
    <table class="table table-striped table-bordered">
        <tr>
            <td><h3>ID</h3></td>
            <td><h3>CATEGORIA</h3></td>
            <td><h3>REMOVER</h3></td>
        </tr>

        <?php
            $categorias = listaCategorias($conexao);
            foreach ($categorias as $categoria) : 
        ?>  

        <tr>              
            <td><?php echo $categoria['id']; ?></td>
            <td><?php echo $categoria['nome']. "</br>";?></td>
            <td><a href="./remove-categoria.php?id=<?php echo $categoria['id']; ?>" class="text-danger">Remover</a>
        </tr>  

        <?php
            endforeach  
        ?>  

    </table>     

<?php include("rodape.php"); ?>