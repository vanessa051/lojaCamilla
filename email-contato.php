<?php
    include("./cabecalho.php");
    include("./logica-usuario.php");

    //TODO: Implementar o SANITIZE
    $nome_cliente = $_POST["nome_cli"];
    $email_cliente = usuarioLogado();
    $data_envio = date("d/m/Y");
    $msg_form = $_POST["mensagem"];

    $assunto = "Email de Contato Lojinha da Camilla";
    
    $corpo_mensagem = "
        Data de Envio: $data_envio
        Nome do Cliente: $nome_cliente
        Email do Cliente: $email_cliente \n
        Mensagem: $msg_form
    ";    
    
    if ( mail($email_cliente, $assunto, $corpo_mensagem)) {
        echo'<p class = "alert-success">Email enviado com sucesso!</p>';
    } else {
        echo'<p class = "alert-danger">!ERRO! Falha no envio do email.</p>';
    }

    include("./rodape.php");
 ?>   
