<?php 
	include("./cabecalho.php");
	include("./conecta.php");
	include("./banco-satisfacao.php");
?>
		
<?php
	$voto = $_POST["voto"];
	$ip=getenv("REMOTE_ADDR");
	insereIp($conexao, $ip);	

	if($voto =='excelente'){
		qtd_votosExcelente($conexao);
?>
		<br><p class="alert-success">Voto foi realizado com sucesso!</p>
<?php 
	}elseif($voto =='bom'){
		qtd_votosBom($conexao);
?>
		<br><p class="alert-success">Voto foi realizado com sucesso!</p>

<?php 
	}elseif($voto =='regular'){
		qtd_votosRegular($conexao);
?>
		<br><p class="alert-success">Voto foi realizado com sucesso!</p>
<?php 
	}elseif($voto =='ruim'){
		qtd_votosRuim($conexao);
?>
		<br><p class="alert-success">Voto foi realizado com sucesso!</p>

<?php 
	}else {
		$msg = mysqli_error($conexao);
?>
		<br><p class="alert-danger">Voto não realizado Erro:<?= $msg; ?> </p>
<?php 
	}
	echo "<h4> Seu IP: $ip </h4>";
?>

	<table class="table table-striped table-bordered">
		<h1>Votos computados:</h1>
			
		<tr><td><b>Excelente: <?php exibirExcelente($conexao)?></b></td></tr>			
		<tr><td><b>Bom: <?php exibirBom($conexao)?></b></td></tr>
		<tr><td><b>Regular:<?php exibirRegular($conexao)?></b></tr>
		<tr><td><b>Ruim: <?php exibirRuim($conexao)?></b></td></tr> 
			
	</table>

	<a class="btn btn-primary" href="satisfacao.php">Voltar a pagina de votação </a>

<?php
	mysqli_close($conexao);
	include("./rodape.php");
?>