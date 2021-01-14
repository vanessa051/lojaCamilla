<?php 
    include("./cabecalho.php"); 
	include("./conecta.php"); 
	include("./banco-categoria.php");
	include("./banco-produto.php"); 
    header('Content-type: text/html; charset=ISO-8859-1');
	$id = $_GET['id']; 
	$produto = buscaProduto($conexao, $id); 

	$categorias = listaCategorias($conexao);

    $usado = $produto['usado']?"checked='checked'":""; //Variável produto traz os produtos do formulário     
?>

    <h1>Alterando Produtos</h1>

	<form action="./altera-produto.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $produto['id']?>">
		<table class="table" style="text-align:left">
            <tr>
                <td> Nome </td>
                <td><input class="form-control" type="text" name="nome_prod" value="<?php echo $produto['nome']?>"> </td>
            </tr>

            <tr>
                <td>Preço</td>
                <td><input class="form-control" type="number" name="preco" value="<?php echo $produto['preco']?>"> </td>
            </tr>

            <tr>
                <td>QTD ESTOQUE</td>
                <td> 20 </td>
            </tr>

            <tr>
                <td>Descrição</td>   
                <td><textarea name="descricao" class="form-control"> <?php echo utf8_encode($produto['descricao'])?> </textarea></td>            
            </tr>

            <tr>
                <td>Usado</td>
                <td><input type="checkbox" name="usado" <?php echo $usado?> value="true"></td>
            </tr>

            <tr>
                <td><b>Categoria</b></td>

                <td>
                    <select class="form-control" name="categoria_id">
                        <?php foreach($categorias as $categoria) :
                                $essaEhACategoria =$produto['categoria_id'] == $ctegoria['id'];
                                $selecao = $essaEhACategoria ? "selected='selected'" : "";
                        ?>
                            <option value="<?php echo $categoria['id']?>" <?php echo $selecao?>>
                                <?php echo $categoria['nome']?>
                            </option>
                        <?php endforeach?>
                    
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><button class="btn btn-primary" type="submit">Alterar</button></td>
            </tr>
        </table>
	</form>