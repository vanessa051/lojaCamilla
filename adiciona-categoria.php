<?php 
    include("./cabecalho.php");
    include("./conecta.php");
    include("./banco-categoria.php");
  
    $nome = $_POST["nome_cat"];
?>    

    <?php
        if (insereCategoria($conexao, $nome) && $nome !="") {  
    ?> 
            <p class="alert-success">A categoria <?php echo $nome?>, foi adicionado(a) com sucesso!</p>     
        <?php 
        }else {
            $msg = mysqli_error($conexao);
        ?>
            <p class = "alert-danger"> A categoria <?php echo $nome;?> NÃO foi adicionada: <?php echo $msg;?> </p>             
    <?php 
        }
        mysqli_close($conexao); 
    ?> 

<?php include("./rodape.php");?>