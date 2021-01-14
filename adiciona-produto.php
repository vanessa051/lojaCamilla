<?php 
    include("./cabecalho.php");
    include("./conecta.php");
    include("./banco-produto.php");
    include("./logica-usuario.php");

    verificaUsuario();

    $nome = $_POST["nome_prod"];
    $preco = $_POST["preco"];
    $qtdest = 20;
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];

    if (array_key_exists('usado', $_POST)) {
        $usado = 1;
    } else {
        $usado = 0;
    }
?>    

    <?php
        if (insereProduto($conexao, $nome, $preco, $qtdest, $descricao, $usado, $categoria_id)) {  
    ?> 
            <p class = "alert-success">O Produto <?php echo $nome;?>, no valor de <?php echo $preco;?>R$ foi adicionado com sucesso!</p>     
        <?php 
        }else {
            $msg = mysqli_error($conexao);
        ?>
            <p class = "alert-danger"> O produto <?php echo $nome;?> NÃO foi adicionado: <?php echo $msg;?> </p>             
    <?php 
        }
        mysqli_close($conexao); 
    ?> 
    
<?php include("./rodape.php")?>


