<?php
    include("./conecta.php");
    include("./banco-categoria.php");

    $id = $_GET['id']; //Enviado via URL(GET)
    removeCategoria($conexao, $id);
    echo"<script>location.href='lista-categoria.php?removido=true'</script>";
    //header("Location:lista-categoria.php?removido=true");
    die();

    include("rodape.php");
?>

