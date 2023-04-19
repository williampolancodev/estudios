<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Formularios PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        
        <!--action lleva el valor de la pagina o archivo a donde enviaremos 
        la información, si la dejamos en blanco la información sera enviada
        a la misma página en la que estamos-->
        
        <form action="" method="POST" enctype="multipart/form-data">
        
        <!--con el enctype="multipart/form-data" permite subir archivos o
        ficheros al formulario para enviarlos al servidor-->
            
            <p>
                <label for="nombre"><b>Nombre:</b></label><br/>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre"/>
            </p>
            <p>
                <label for="apellido"><b>Apellido:</b></label><br/>
                <input type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido"/>
            </p>
            
            <!--El atributo (autofocus="") con valor autofocus permite que una 
            vez se cargue la página se hara enfoque unicamente en ese input-->
            
            <!--El atributo (disabled="") con valor disabled indica en la página
            que un campo está deshabilitado-->
            
            <!--El atributo (maxlength="") con un valor numerico indica la 
            cantidad máxima de caracteres que puede recibir el campo-->
            
            <!--El atributo (minlength="") con un valor numerico indica la 
            cantidad mínima de caracteres que puede recibir el campo-->
            
            <!--El atributo (pattern="") permite regular y validar las expresiones
            que puede recibir o aceptar el campo. Por ejemplo, pattern="[A-Z]+"
            Esto indicara que el campo puede recibir innumerables veces letras
            en mayusculas.
            
            Dato curioso: si le quito el "+" el campo solo podria recibir una letra
            comprendida en el rango especificado-->
            
            <!--El atributo (required="") con valor required permite especificar 
            que el campo no puede quedar vacio y que debe ser enviado con información-->
            
            <!--El atributo (placeholder="") nos permite mostrar un texto que
            aparecerá por default en el campo y que desaparecerá cuando hagamos
            focus en el campo-->
            
            <!--El atributo (value="") nos permite rellenar el campo con texto
            real, el cual cuando hacemos focus en el campo, nos aparecera para 
            que lo borremos o modifiquemos-->
            
            <p>
                <label for="boton"><b>Botón:</b></label><br/>
                <input type="button" name="boton" value="clickeame"/>
            </p>
              
                <label for="sexo"><b>Sexo: </b></label><br/>
            <p>
                Hombre <input type="checkbox" name="sexo" value="hombre"/>
                Mujer <input type="checkbox" name="sexo" value="mujer"/>
            </p>
            <!--si al input de tipo checkbox se le agrega el atributo (checked="")
            con valor checked, vendra marcado por defecto-->
            
            <p>
                <label for="color"><b>Color:</b></label><br/>
                <input type="color" name="color"/>
            </p>
            <p>
                <label for="correo"><b>Correo: </b></label><br/>
                <input type="email" name="correo"/>
            </p>
            <p>
                <label for="fecha"><b>Fecha: </b></label><br/>
                <input type="date" name="fecha" />
            </p>
            <p>
                <label for="archivo"><b>Archivo: </b></label><br/>
                <input type="file" name="archivo" multiple="multiple" />
            </p>
            <!--Con el atributo (multiple="") con el valor multiple, permite que
            el input tipo file, pueda recibir varios archivos -->
            <p>
                <label for="fecha"><b>Fecha: </b></label><br/>
                <input type="hidden" name="fecha" />
            </p>
            <!--si el input es de tipo hidden, no se mostrara al usuario pero
            igual se enviara al servidor-->
            <p>
                <label for="numero"><b>Numero: </b></label><br/>
                <input type="number" name="numero" />
            </p>
            <p>
                <label for="pass"><b>Contraseña: </b></label><br/>
                <input type="password" name="pass" />
            </p>
            
            <label for="continente"><b>Continente: </b></label><br/>
            <p>
                <input type="radio" name="continente" value="America del Sur"/>America el Sur<br/>
                <input type="radio" name="continente" value="Europa"/>Europa <br/>
                <input type="radio" name="continente" value="Asia"/>Asia <br/>
            </p>
            
            <p>
                <label for="web"><b>Página web: </b></label><br/>
                <input type="url" name="web" />
            </p>
            
            <textarea></textarea><br/>
            
            Peliculas:
            <select name="peliculas">
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="La jungla de cristal">La jungla de cristal</option>
                <option value="Gran torino">Gran torino</option>
                <option value="Spiderman 2">Spiderman 2</option>
            </select>
            <br/>
            
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>

