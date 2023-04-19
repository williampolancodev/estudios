<?php

if(isset($_GET['email'])){
    $email = $_GET['email'];
    if(validar($email)){
        echo "<h1>Correo validado</h1>";
    }else{
        echo "<h1> Correo invalido! Por favor ingrese un correo adecuado</h1>";
    }
}else{
    echo "<h1>Enviar un correo</h1>";
}



function validar($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

?>

<form action="ejercicio2.php" method="GET">
    <input type="text" name="email" placeholder="Ingresa tu correo" />
    <input type="submit" value="enviar" />
</form>
