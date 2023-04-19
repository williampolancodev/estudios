<!DOCTYPE HTML>
<html lang="es">
    <head>
        <!--el atributo charset="utf-8" permite que se muestres todos los simbolos y caracteres espeaciales
        como la "ñ"-->
        <meta charset="utf-8"/>
        <title>Formulario en PHP</title>
    </head>
    <body>
        <h1>Formulario en PHP</h1>
        <!--El metodo GET se utiliza para pasar parametros al servidor a traves de la URL.
            Y con el atributo action le indicaremos a que página o sitio queremos que envie la información-->
        <!--<form method="GET" action="recibir.php">-->
        <!--Al cambiar el metodo de GET por el de POST, esto hara que la informacion ya no se pase por la URL,
        en cambio, pasara la informacion por la cabeceras de la página lo cual es más seguro que el GET-->
        <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label><br/>
                <!--el atributo name es super importante ya que ese nombre que le coloquemos sera de la clave
                    de la variable get que voy a poder recoger-->
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre"/>
            </p>
            
            <p>
                <label for="apellido">Apellido</label><br/>
                <input type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido"/>
            </p>
            
            <p>
                <label for="web">Web</label><br/>
                <input type="text" id="web" name="web" placeholder="Ingresa tu web"/>
            </p>
            
            <p>
                <label for="telefono">Telefono</label><br/>
                <input type="text" id="telefono" name="telefono" placeholder="Ingresa tu telefono"/>
            </p>
            
            <input type="submit" value="Enviar formulario" />
        </form>
    </body>
</html>


<?php

?>
