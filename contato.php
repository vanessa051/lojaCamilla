<?php include("./cabecalho.php"); ?>

	<h1>Formulário de Contato</h1>

	<form action="./email-contato.php" name="form" method="POST">
		<table class="table" style="text-align:left">
            <tr>
                <td> Nome </td>
                <td><input class="form-control" type="text" name="nome_cli"></td>
            </tr>

            <tr>
                <td>Mensagem</td>   
                <td><textarea name="mensagem" class="form-control"></textarea></td>            
            </tr>

            <tr> 
                <td><button class="btn btn-primary" type="submit">Enviar</button></td>
            </tr>

        </table>
	</form>

<?php include("rodape.php"); ?>