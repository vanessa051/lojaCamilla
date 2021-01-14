<?php 
    include("./cabecalho.php");
    include("./conecta.php");
    include("./banco-produto.php");

    $id = $_GET['id']; //Enviado via URL(GET)
    removeProduto($conexao, $id);
    echo"<script>location.href='lista-produto.php?removido=true'</script>";
    //header("Location:lista-produto.php?removido=true");
    die();

    include("rodape.php"); 
?>

