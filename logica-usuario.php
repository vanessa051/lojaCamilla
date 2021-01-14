<?php
    session_start();

    function usuarioEstaLogado(){
        return isset($_SESSION["usuario_logado"]);
    }  

    function verificaUsuario(){
        if (!usuarioEstaLogado()) {
            echo"<script>location.href='index.php?falhaDeSeguranca=true'</script>";
            //header("Location:index.php?falhaDeSeguranca=true");
            die();
        }
    }

    function usuarioLogado(){
        return $_SESSION["usuario_logado"];
    }

    function logaUsuario($email){
        // setcookie("usuario_logado", $email, time() + 60);
        $_SESSION["usuario_logado"] = $email;
    }

    function logout() {
        session_destroy();
    }

?>