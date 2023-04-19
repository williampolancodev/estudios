<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Subir archivos PHP</title>
    </head>
    <body>
        <h1>Subir archivos con PHP</h1><br/>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            
            <input type="file" name="archivo" /><br/>
            <input type="submit" value="Enviar" /><br/>
        </form>
        
        <h1>Listado de imagene</h1>
        <?php
            $gestor = opendir('./images');
            if($gestor):
                while(($imagen = readdir($gestor)) !== false):
                    if($imagen != '.' && $imagen != '..'):
                        echo "<img src='images/$imagen' width='200px'/><br/>";
                    endif;
                endwhile;
            endif;
        ?>
    </body>
</html>

