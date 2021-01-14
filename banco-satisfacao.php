<?php
	
	function qtd_votosExcelente($conexao){
		$query="update votos set qtd_votos = qtd_votos+1 where categoria = 'excelente' ";
		return mysqli_query($conexao, $query);
		
	}
	function qtd_votosBom($conexao){
		$query="update votos set qtd_votos = qtd_votos+1 where categoria = 'bom' ";
		return mysqli_query($conexao, $query);
	}
	function qtd_votosRegular($conexao){
		$query="update votos set qtd_votos = qtd_votos+1 where categoria = 'regular' ";
		return mysqli_query($conexao, $query);
	}
	function qtd_votosRuim($conexao){
		$query="update votos set qtd_votos = qtd_votos+1 where categoria = 'ruim' ";
		return mysqli_query($conexao, $query);
	}

	function insereIp($conexao, $ip){
		$query= "INSERT into ip (ip) values ('{$ip}')";
		return mysqli_query($conexao, $query);
	}

	function bloqIp ($conexao, $ip){
		$query = mysqli_query($conexao, "select ip from ip where ip = ('{$ip}')");
		if(mysqli_num_rows($query)>0){
			echo"<script>location.href='bloqueio.php'</script>";
			//header("Location:bloqueio.php");
			die();
		}
	}

	function exibirExcelente($conexao){
		$query="select qtd_votos from votos where categoria = 'excelente' ";
		$resultado = mysqli_query($conexao, $query);
		$cont = mysqli_fetch_assoc($resultado);
		echo $cont['qtd_votos'];
	}

	function exibirBom($conexao){
		$query="select qtd_votos from votos where categoria = 'bom' ";
		$resultado = mysqli_query($conexao, $query);
		$cont = mysqli_fetch_assoc($resultado);
		echo $cont['qtd_votos'];
	}

	function exibirRegular($conexao){
		$query="select qtd_votos from votos where categoria = 'regular' ";
		$resultado = mysqli_query($conexao, $query);
		$cont = mysqli_fetch_assoc($resultado);
		echo $cont['qtd_votos'];
	}

	function exibirRuim($conexao){
		$query="select qtd_votos from votos where categoria = 'ruim' ";
		$resultado = mysqli_query($conexao, $query);
		$cont = mysqli_fetch_assoc($resultado);
		echo $cont['qtd_votos'];
	}

?>