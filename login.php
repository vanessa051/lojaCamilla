<?php
	include("conecta.php");
	include("banco-usuario.php");
	include("logica-usuario.php");

	$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

	if($usuario == null){
		echo"<script>location.href='index.php?login=0'</script>";
		//header("Location:index.php?login=0");
	}else {
		logaUsuario($usuario["email"]);
		echo"<script>location.href='index.php?login=1'</script>";
		//header("Location:index.php?login=1");
	}
	die();
?>