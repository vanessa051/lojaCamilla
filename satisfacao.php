<?php 
    include("./cabecalho.php");
    include ("./logica-usuario.php");
    include ("./conecta.php");
    verificaUsuario();
    include ("./banco-satisfacao.php");
    
	$ip=getenv("REMOTE_ADDR");
	bloqIp ($conexao, $ip);
	echo "<h4> Seu IP: $ip </h4>";
?>

<form action = "pos-satisfacao.php" method = "post">

    <h1>Pesquisa de satisfação</h1>

    <table class="table table-striped table-bordered">
        
        <tr><td><h3>CLASSIFICAÇÃO</h3></td></tr>               
    
        
        <tr><td><input type = "radio" name = "voto" value = "excelente"/> Excelente</td></tr>
        <tr><td><input type = "radio" name = "voto" value = "bom"/> Bom</td></tr>
        <tr><td><input type = "radio" name = "voto" value = "regular"/> Regular</td></tr>
        <tr><td><input type = "radio" name = "voto" value = "ruim"/> Ruim</td></tr>
    
    </table>
    <td><button class="btn btn-primary" type="submit" >Enviar</button></td>
    
</form>
  

<?php include("./rodape.php")?> 