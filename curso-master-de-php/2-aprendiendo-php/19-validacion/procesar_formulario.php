<?php
$error = 'faltan_valores';

if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) &&
   !empty($_POST['email']) && !empty($_POST['pass'])){
   $error = 'ok';
   
   $nombre = $_POST['nombre'];
   $apellidos = $_POST['apellidos'];
   $edad = (int)$_POST['edad'];
   $email = $_POST['email'];
   $pass = $_POST['pass'];
   
   //Validar el nombre
   /*Con la función preg_match podemos verificar una expresion regular, pasandole
     por parametros la expresión que queremos que verifique y la variable en la
     cual lo va a verificar    */
    if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
        $error = 'nombre';
    }        
    if(!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)){
        $error = 'apellidos';
    }
    /*En el caso de edad en vez del !preg_match("/[0-9]+/", $edad), 
    se puede utilizar la funcion filter_var*/
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error = 'edad';
    }        
         
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }        
         
    if(empty($pass) || strlen($pass)<5){
        $error = 'password';
    }        
    /* 
    var_dump($_POST);
    var_dump($error);
    die();
     */
}else{
    $error = 'faltan_valores';
}

if($error != 'ok'){
    //Recuerda con la función header haces la redirección
    header("Location:index.php?error=$error");
}

?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Validación formularios en PHP</title>
    </head>
    <body>
        <?php if($error == 'ok'): ?>
        <h1>Datos validados correctamente</h1>
            <p><?=$nombre?></p>
            <p><?=$apellidos?></p>
            <p><?=$edad?></p>
            <p><?=$email?></p>
        <?php endif; ?>
    </body>
</html>