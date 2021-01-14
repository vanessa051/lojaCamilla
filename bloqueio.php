<?php 
	include("./cabecalho.php");
    include("./conecta.php");
	include("./banco-satisfacao.php");
?>

<br><p class="alert-danger">Você só pode votar uma vez!</p>

	<table class="table table-striped table-bordered">
		<h1>Votos computados:</h1>
				
		<tr><td><b>Excelente: <?php exibirExcelente($conexao)?></b></td></tr>			
		<tr><td><b>Bom: <?php exibirBom($conexao)?></b></td></tr>
		<tr><td><b>Regular:<?php exibirRegular($conexao)?></b></tr>
		<tr><td><b>Ruim: <?php exibirRuim($conexao)?></b></td></tr> 		
	</table>
<?php 
	include("./rodape.php");
?>
