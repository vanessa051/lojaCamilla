<?php 
    include("./cabecalho.php"); 
    include("./conecta.php"); 
    include("./banco-produto.php"); 
    
    $id = $_GET['id']; 
    $produto = buscaProduto($conexao, $id); 

?>

	<h1>TELA DE COMPRA</h1>

	<form action="./banco-compra.php" name="form" method="POST">
        <input type="hidden" name="id" value="<?php echo $produto['id']?>">
        <input type="hidden" name="nome" value="<?php echo $produto['nome']?>">
        <input type="hidden" name="preco" value="<?php echo $produto['preco']?>">
        <input type="hidden" name="descricao" value="<?php echo $produto['descricao']?>">

		<table class="table" style="text-align:left">

            <tr> 
                <td>Nome </td>
               <td> <?php echo $produto['nome']?> </td>

            <tr>
                <td>Quantas unidades deseja comprar</td>
                <td><input class="form-control" type="number" name="qtdCompra"></td>
            </tr>

            <tr> 
                <td><button class="btn btn-primary" type="submit">Enviar</button></td>
            </tr>

        </table>
	</form>

<?php include("rodape.php"); ?>