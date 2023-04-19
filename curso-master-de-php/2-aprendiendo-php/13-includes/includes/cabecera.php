<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Includes en PHP</title>
    </head>
    <body>
        <!--cabecera-->
        <div class="cabecera">
            <h1>Includes en PHP</h1>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobremi.php">Sobre mi</a></li>
                <li><a href="contacto.php">Contactos</a></li>
                <li><a href="https://google.com">Google</a></li>
            </ul>
            <hr/>
        </div>
        
        <?php /*las variables que se tenga en un archivo que se llama a otro a traves de un include, 
               pueden ser utilizadas. Cabe destacar que esa variable podra ser utilizada por el codigo que se encuetra
                por debajo del include*/