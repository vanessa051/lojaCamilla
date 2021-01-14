<?php

    include("./logica-usuario.php");
    logout();
    echo"<script>location.href='index.php?logout=true'</script>";
    //header("Location:index.php?logout=true");
    die();

?>