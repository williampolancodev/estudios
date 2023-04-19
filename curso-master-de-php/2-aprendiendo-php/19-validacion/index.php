<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Validación formularios en PHP</title>
    </head>
    <body>
        <h1>Validar formulario en PHP</h1>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'faltan_valores'){
                    echo '<strong style="color:red">Introduce todos los datos en todos los campos</strong>';
                }
                if($error == 'nombre'){
                    echo '<strong style="color:red">Introduce bien el nombre</strong>';
                }
                if($error == 'apellidos'){
                    echo '<strong style="color:red">Los apellidos no son correctos</strong>';
                }
                if($error == 'edad'){
                    echo '<strong style="color:red">Introduce una edad correcta</strong>';
                }
                if($error == 'email'){
                    echo '<strong style="color:red">el correo es erroneo</strong>';
                }
                if($error == 'password'){
                    echo '<strong style="color:red">Introduce una contraseña de más de cinco letras</strong>';
                }
            }
        ?>
        
        <!--Con el atributo required puedes hacer una validación del formulario en HTML-->
        <form method="POST" action="procesar_formulario.php">
         <p>
             <!--se le quito al input para probar la validacion del back al input
             required="required" pattern="[A-Za-z]+"-->
            <label for="nombre"><b>Nombre:</b></label><br/>
            <input  type="text" name="nombre" required="required" pattern="[A-Za-z ]+" placeholder="Ingresa tu nombre"/>
         </p>
        
         <p>
            <!--Colocar al input required="required" pattern="[A-Za-z]+"--> 
            <label for="apellidos"><b>Apellidos:</b></label><br/>
            <input type="text" name="apellidos" required="required" pattern="[A-Za-z ]+"
                   placeholder="Ingresa tus apellidos"/>
         </p>
        
         <p>
             <!--required="required" pattern="[0-9]+"-->
            <label for="edad"><b>Edad:</b></label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"/>
         </p>
        
         <p>
            <label for="email"><b>Email:</b></label><br/>
            <input type="text" name="email" required="required"/>
         </p>
         <p>
            <label for="pass"><b>Contraseña:</b></label><br/>
            <input type="password" name="pass" required="required" minlength="5"/>
         </p>
         
         <input type="submit" value="Enviar" />
        
        </form>    
    </body>
</html>


