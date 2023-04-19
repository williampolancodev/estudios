/*MODIFICAR TABLAS Y COLUMNAS */

# RENOMBRAR UNA TABLA #

/*Se utiliza el comando "ALTER TABLE +(nombre de la tabla que quermos modificar)
+ RENAME TO +(el nombre nuevo que le queremos asignar);"*/

ALTER TABLE usuarios RENAME TO usuarios_renom;

/*Nota: Es recomendable que las sentencias de sql se escriban en mayúsculas y lo
demás en minúculas, para diferenciar cuales son sentencias y que es el contenido
de la base de datos(atributos, campos, tablas, etc) */ 

# CAMBIAR NOMBRE DE UNA COLUMNA #

/*Se utiliza el comando "ALTER TABLE +(nombre de la tabla donde se quiere cambiar
la columna) + CHANGE +(nombre de la columna a cambiar) +(nombre nuevo que le
queremos asignar) +(tipo de dato con su longitud) +(restriccion)"*/

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

# MODIFICAR COLUMNA SIN CAMBIAR NOMBRE #

/*Se utiliza el comando "ALTER TABLE +(nombre de la tabla que se quiere modificar)
+ MODIFY +(nombre de la columna queremos modificar) +(tipo de dato con su longitud) 
+(restriccion)"*/

ALTER TABLE usuarios_renom MODIFY apellido char(40) not null;

# AÑADIR COLUMNA #

/*Se utiliza el comando "ALTER TABLE +(nombre de la tabla donde se quiere añadir 
la columna) + ADD +(nombre de la columna a agregar) +(tipo de dato con su longitud)
 +(restriccion)"*/

ALTER TABLE usuarios_renom ADD website varchar(100) null;

# AÑADIR RESTRICCIÓN A COLUMNA #

/*Para agregar una restriccion podriamos utilizar simplemente el ADD como se
muestra en el caso anterior, pero si queremos agregar una restriccion más grande o
avanzada entonces utilizariamos la sentencia "ADD CONSTRAINT" en el caso de la
restriccion para que un registro sea unico, se utiliza "uq_(nombre del campo unico)
UNIQUE(nombre del campo que queremos que sea unico)"*/

ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

# BORRAR UNA COLUMNA #

ALTER TABLE usuarios_renom DROP website;