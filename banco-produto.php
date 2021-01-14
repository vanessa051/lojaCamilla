<?php 

   function listaProdutos ($conexao){
      $produtos = array();
      $resultado = mysqli_query($conexao, "SELECT p.*, c.nome AS categoria_nome FROM produtos AS p join categorias AS c ON p.categoria_id = c.id");

      while ($produto = mysqli_fetch_assoc($resultado)){
         array_push($produtos, $produto);
      }
      return $produtos;
   }

   function insereProduto($conexao, $nome, $preco, $qtdest, $descricao, $usado, $categoria_id){
      $nome = addslashes($nome);
      $descricao = addslashes($descricao);
      $query = "INSERT INTO produtos (nome, preco, qtdest, descricao, usado, categoria_id) VALUES ('{$nome}', '{$preco}', '{$qtdest}', '{$descricao}', '{$usado}', '{$categoria_id}')";
      return mysqli_query($conexao, $query);
   } 

   function buscaProduto($conexao, $id){
      $query = "SELECT * FROM produtos WHERE id = {$id}";
      $resultado = mysqli_query($conexao, $query);
      return mysqli_fetch_assoc($resultado);
   }
   
   function alteraProduto($conexao, $id, $nome, $preco, $qtdest, $descricao, $usado, $categoria_id){
      $query = "UPDATE produtos SET nome = '{$nome}', preco = '{$preco}', qtdest = '{$qtdest}',  descricao = '{$descricao}', usado = '{$usado}', categoria_id = '{$categoria_id }' where id ='{$id}' ";
      return mysqli_query($conexao, $query);
   }
 
   function removeProduto($conexao, $id){
      $query = "DELETE FROM produtos WHERE id = {$id}";
      return mysqli_query($conexao, $query);
   }

?>


