/*CREAR TABLA*/

/*Tipos de datos que reciben las columnas(campos)

//Nota: con el tiny int permite solo menter numeros hasta el 255
- int(nª cifras que permite ese campo) ENTERO 
- integer (nª cifras que permite ese campo) ENTERO (maximo 4 294 967 295)
- varchar (nª caracteres que permite ese campo) STRING / ALFANUMERICO 
(maximo 255 caracteres)
- char (nª caracteres que permite ese campo) STRING / ALFANUMERICO (
maximo 255 caracteres)
- float ((nª cifras, nº decimales) que permite ese campo) COMA FLOTANTE
- date, time, timestamp

Los anteriores tipos tienen un limite de los caracteres o cifras que pueden 
guardar, para ello, existen otros tipos de datos como:

//STRING MAS GRANDES
- TEXT (maximo 65535 caracteres)
- MEDIUMTEXT (maximo 16 millones caracteres)
- LONGTEXT  (maximo 4 billones de caracteres)

//ENTEROS MÁS GRANDES (que casi no se utilizan)
- MEDIUMINT
- BIGINT

*/

/*Para crear una taba se utiliza el comando "CREATE TABLE" seguido del nombre
en plural*/
CREATE TABLE usuarios(
id          int(11),
nombre      varchar(100),
apellidos   varchar(255),
email       varchar(100),
password    varchar(255)
);

/*Con el comando ("show tables;") podemos ver las tablas que hay en la base de
datos que estamos utilizando

//Y con el comando ("desc +(nombre de la tabla que queremos ver)") le indicamos
que nos describa la tabla que le indiquemos

#Gestion visual de tablas y bases de datos

    Para estos casos tenemos PHPMyAdmin, Adminer y otros más. Los cuales nos permiten
    crear, modificar y eliminar bases de datos y sus elementos utilizando la interfaz
    gráfica sin necesidad de escribir codigo

#MySQL integrado a tu IDE

    Si al crear un nuevo usuario en la bases de datos da un error, lo que 
    debemos es buscar la direccion donde esta el mysql denuestro wamp
    en este caso seria D:\wamp64\bin\mysql\mysql8.0.31\bin 
    
    Accedemos a esa ruta a traves del cmd e ingresamos el siguiente comando:
    mysql_upgrade -u root -p

    Con eso el problema de inconsistencia con mysql deberian ser corregidos y 
    permitira crear el usuario sin problemas

  //Asi como hay gestores visuales para bases de datos, tambien esta la opcion 
    de gestionar directamente desde un IDE, en ese caso netbeans tiene la opcion
    de crear una conexion con la base de datos, yendo a la ventana services, pestaña
    databases y con click derecho new connection, ahi seleccionaremos el driver
    para este caso se utiliza mysql connector j 8.0. despue se verifica que el
    host, el puerto y la database que vamos a utilizar sea correcta. Luego ingresamos
    usuario y contraseña y verificamos que la conexion sea correcta por el test.
    Y cuando revele que sea correcta le damos en finalizar.
    
    Despúes de eso nos aparecera la base de datos la cual podremos revisar e 
    incluso modificar y actualizar directamente desde el netbeans. Tambien
    podremos agregar nuevas columnas y datos. Sin duda es otra alternativa para
    facilitar el trabajo.

    Pero lo recomendable es saber utilizar desde la consola antes de centrarse 
    en los 
*/

/*
*/
