/*#RESTRICCIONES BÁSICAS*/
    /*  1. Una restriccion de integridad muy común es el ("not null"), el cual indica 
que el campo que lo posea no puede ser nulo. Por el contrario, si el campo tiene la
restriccion ("null") significa que ese campo podra tener un valor nulo.
        2. Otra restriccion muy comun seria el "default" el cual le podemos pasar
un parametro que sera el valor por defecto que tendra ese campo.
        3. Otra restricción de integridad muy utilizada es "auto_increment" que 
ira aumentando el campo a medida que vayamos agregando nuevos registros a las filas.

Nota:El id en la mayoria de la tablas es una clave primaria (Primary key), 
la cual es un campo que identifica ese registro dentro de la tabla.

Nota2: el auto_increment es una restriccion que solo está disponible para un campo, 
que es una Primary key. Para definir un campo como la Primary key se utiliza la 
siguiente instrucción:

CONSTRAINT pk_usuarios PRIMARY KEY(id);
*/
  
CREATE TABLE usuarios(
id          int(11) auto_increment not null,
nombre      varchar(100) not null,
apellidos   varchar(255) default 'hola que tal',
email       varchar(100) not null,
password    varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
