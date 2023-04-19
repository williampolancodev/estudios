<?php
    //leer un fichero y ejecutar el codigo en el archivo donde lo estas llamando
    /*Ademas de poder utilizar la instrucción include para incorporar codigo de otro archivo. Tambien tenemos otras
     otras instrucciones*/
    
    include'includes/cabecera.php';
    include_once 'includes/cabecera.php'; /* Esto indica que solo se incluria una vez en el archivo y 
    no se repitara si se utiliza otro include_pnce*/
    require'includes/cabecera.php'; /*A diferencia del include, el require no permite que la pagina 
    se ejecute si se encuetra algún error*/
    require_once'includes/cabecera.php'; /*Es el más estricto ya que no permite que la página se ejecute si hay un error y
    solo permite utilizar una vez el codigo del archivo que se especifica*/
    ?>

        <!--contenido-->
        <div>
            <h2>Esta es la página de inicio</h2>
            <p>Texto de prueba de prueba</p>
        </div>
<?php include'includes/footer.php'; ?>
    

