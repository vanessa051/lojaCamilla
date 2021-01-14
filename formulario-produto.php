<?php 
    include ("./cabecalho.php"); 
    include ("./banco-categoria.php");
    include ("./logica-usuario.php");
    verificaUsuario();
    header('Content-type: text/html; charset=ISO-8859-1');
    $categorias = listaCategorias($conexao);
    
?>

    
	<h1>Formulario de cadastro</h1>

	<form action="./adiciona-produto.php" name="form" method="POST">
		<table class="table" style="text-align:left">
            <tr>
                <td> Nome </td>
                <td><input class="form-control" type="text" name="nome_prod"></td>
            </tr>

            <tr>
                <td>Preço</td>
                <td><input class="form-control" type="number" name="preco"></td>
            </tr>

            <tr>
                <td>Descrição</td>   
                <td><textarea name="descricao" class="form-control"></textarea></td>            
            </tr>


            <tr>
                <td>Usado</td>
                <td><input type="checkbox" name="usado" value="true"></td>
            </tr>

            <tr>
                <td><b>Categorias:</b></td>
                <td class="text-left">
                    <select name="categoria_id">
                        <?php foreach($categorias as $categoria): ?>
                            <option value="<?php echo $categoria['id']; ?>"> <?php echo $categoria['nome'];?>  </option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>
        
            <tr> 
                <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
            </tr>

        </table>
	</form>

<?php include("rodape.php"); ?>