<?php 
    include ("./cabecalho.php"); 
    include ("./banco-categoria.php");
    
   // $categorias = listaCategorias($conexao);
?>
    
	<h1>CATEGORIAS</h1>

	<form action="./adiciona-categoria.php" name="form" method="POST">
		<table class="table">
            <tr>
                <td> Nome </td>
                <td><input class="form-control" type="text" name="nome_cat"></td>
            </tr>
            
            <tr> 
                <td><button class="btn btn-primary" type="submit" >Cadastrar</button></td>
            </tr>

        </table>
	</form>

<?php include("rodape.php"); ?>