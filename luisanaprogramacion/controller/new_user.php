<?php

if(!empty($_POST["enviar"])){
    if (!empty($_POST["nombreyapellido"]) and 
    !empty($_POST["usuario"]) and 
    !empty($_POST["email"]) and 
    !empty($_POST["nota"])) {

        $nombreyapellido = $_POST["nombreyapellido"];
        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $nota = $_POST["nota"];

        $sql = $conn -> query(query:"insert into portafolio (nombreyapellido, usuario, email, nota)
        values('$usuario', '$email', '$nota')");
        if($sql==1){
            echo"<div class='alert alert-success'>Comentario agregado</div>";
        }

    } else {
        echo"<div class='alert alert-warning'>Debe completar todas las casillas</div>";
    }
    
}
?>