<?php 
    include("./cabecalho.php");
    include("./logica-usuario.php");
?>



    <?php
        if(isset($_GET["logout"]) && $_GET["logout"] == true) {  ?>
            <p class="alert-success">Deslogado com SUCESSO!!!</p>

    <?php } ?>
    

    <?php
        if(isset($_GET["login"]) && $_GET["login"] == true) {?>
            <p class="alert-success">Logado com sucesso</p>
    <?php
        }
    ?>

    <?php
        if(isset($_GET["login"]) && $_GET["login"] == false) {?>
            <p class="alert-danger">Usuario ou senha inválida!</p>
    <?php
        }
    ?>

    <?php
        if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"] == true){?>
            <p class="alert-danger">Voce NÃO tem acesso a está área do site !</p>
    <?php
        }
    ?>
   
    <h1>BEM VINDO !!!</h1>

    <?php
        if(usuarioEstaLogado()){?>
            <p class="alert-success">Você está logado como <?php echo usuarioLogado() ?>
            <a href="./logout.php">Deslogar</a></p>
    <?php	
        }else {
    ?>    
        <h3>Se já for cadastrado faça seu Login</h3>
			<form action="./login.php" method="post">
				<table class="table">
					<tr>
						<td>Email</td>
						<td><input class="form-control" type="email" name="email"></td>
					</tr>
					<tr>
						<td>Senha</td>
						<td><input class="form-control" type="password" name="senha"></td>
					</tr>

					<tr>
						<td><button type="submit" class="btn btn-primary">Login</button></td>
					</tr>
				</table>
			</form>
	<?php }?>

<?php include("./rodape.php");?> 