<?php
    include ("./conecta.php");
    
    function listaCategorias($conexao){
        $categorias = array();
        $query =  "SELECT * FROM categorias";
        $resultado = mysqli_query($conexao, $query);

        while($categoria = mysqli_fetch_assoc($resultado)){
            array_push($categorias, $categoria);
        }
        return $categorias;
    }

    function insereCategoria($conexao, $nome){
        $query = "INSERT INTO categorias (nome) VALUES ('{$nome}')";

        $resultadoDaInsercao = mysqli_query($conexao, $query);
        return $resultadoDaInsercao;
    }

    function removeCategoria($conexao, $id){
        $query = "DELETE FROM categorias WHERE id = {$id}";
        return mysqli_query($conexao, $query);
    }
?>


