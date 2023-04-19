<?php
/*Para para poder borrar una cookiee tenemos que caducarla, no es como la session
 * que podemos eliminarlas con el session_destroy o cuando el servidor se reinicia.
 * Ya que las cookies se almacenan en el equipo, por lo tanto, no van a desaparecer
 * hasta que la caduque  */
if(isset($_COOKIE['micookie'])){
    unset($_COOKIE['micookie']);
    setcookie('micookie','', time()-(100));
}

/*Reedirección: utilizando la función header puedo modificar la cabecera y puedo
cambiar el location.  Se puede observar su uso en la linea de abajo*/
header('Location:ver_cookies.php');