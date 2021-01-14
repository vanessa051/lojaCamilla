<?php 
    include("./cabecalho.php");
    include("./conecta.php");
    include("./banco-produto.php");

   
    $id = $_POST["id"];
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
    
    if(alteraProduto($conexao, $id, $nome, $preco, $qtdest, $descricao, $usado, $categoria_id)){
?>
       <p class = "alert-success">O Produto  foi alterado com sucesso!</p>   
       <?php
            echo"<script>location.href='lista-produto.php'</script>";
            //header("location:lista-produto.php");
            die();
       ?>
   <?php }else {
        $msg = mysqli_error($conexao);
    ?>  
        <p class = "alert-danger">O produto NÃO foi alterado: <?php echo $msg;?> </p>     
    <?php       
    }
    ?> 
  
    
<?php include("./rodape.php")?>    



