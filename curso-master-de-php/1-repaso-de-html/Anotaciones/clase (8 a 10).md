> # Clase 8 – Imagenes

<div style="text-align: justify">
<div style="text-indent: 0.8cm">

>> Para incrustar imagenes dentro de HTML, se utiliza la etiqueta `<img/>` la cual no tiene ningun contenido de texto. Dicha etiqueta tiene varios atributos importantes como son: <strong>"alt"</strong> a la cual se le asigna el valor de un texto que se mostrara en caso de que la imagen no se muestre. Y el <strong>"title"</strong> que sera el que muestre un pequeño pop-up (una ventana emergente) cuando pasamos el mouse por encima de la imagen.

>> Por otro lado, con el atributo <strong>"src"</strong> podremos indicarle la ubicacion donde se encuentra la imagen para que la muestre en la página. La primera forma es utilizando la ruta absoluta donde se utiliza la dirección especifica donde esta la imagen. La segunda forma seria la ruta relativa que sirve en caso de que el archivo sea movido a un servidor o a otra ubicación.

>> Otro dos atributos que se utilizan son <strong>"width"</strong> y <strong>"height"</strong> que son respectivamente anchura y altura. Mayormente basta con modificar uno de los dos para aumentar o disminuir el tamaño de la imagen, ya que si le damos valores no proporcionales a la images, la misma se deformara.

> # Clase 9 – Tablas

>> Otra manera de organizar la información de una pagina web o el texto, es mediante las tablas. <i>Dato curioso: Anteriormente el la forma de la paginas web se les daba utilizando las tablas, pero en la actualidad se hace con css.</i> Para utilizar las tablas en HTML se utiliza la etiqueta `<table></table>` dentro de esta etiqueta se pueden crear filas con la etiqueta `<tr><tr>` y dentro de las filas se añaden las columnas con la etiqueta `<td><td>`. Mayormente los primeros valores para las columnas se utiliza la etiqueta `<th><th>` ya que resalta el campo de la columna en negrita.

Tambien para darle un aspecto más a tabla, se utiliza el atributo <strong>border</strong> en la etiqueta (table) y otro atributo que es bueno tener en cuenta es <strong>colspan</strong>
que se utilizan en los valores de las columna para ampliarlo en espacio hasta un tamaño de las columnas que tienen hacia adelante.

> # Clase 10 – Formularios

>> Los formularios se utilizan para enviar la información que se solicita al servidor o para la misma paginá realice alguna opcion con la informacion suministradas. Para crear un formulario se utiliza la etiqueta `<form></form>` la cual tiene dos atributos que son muy importantes y se veran más adelante con PHP, que son <strong>method</strong> y <strong>action</strong>. En este formulario se puede utilizar la etiqueta <input/> que genera un campo de texto, la cual se le puede proporcionar atributos como <strong>Type</strong>, <strong>name</strong> la cual el servidor interpretara (siendo la llave el atributo name y el valor sera el que le hayamos asignado) o <strong>placeholder</strong> que es para indicarle al usuario lo que va en el campo.

>> Por otro lado, se puede colocar el nombre de lo que se solicita al usuario en el input utilizando, la etiqueta `<label></label>` a la cual por buenas practicas se le coloca el atributo <strong>for</strong>(este atributo sirve para hacer foco en una etiqueta que tenga el mismo identificado que se le asigne al for) con el mismo valor que tiene el atributo <strong>name</strong> en la etiqueta input. Otra etiqueta que cabe mencionar es `<textarea></textarea>` que nos permite agregar un texto con mayor cantidad de caracteres.

>> En el caso de la etiqueta input, existen varios tipos que se le pueden asignar al atributo <strong>type</strong> lo cual cambiara el tipo de entrada que recibira del usuario. En el caso del tipo "radio" se le debera utilizar junto al atributo <strong>value</strong> y obviamente la de <strong>name</strong>. Otra etiqueta que puede tener un formulario es el `<select></select>` con el atributo <strong>name</strong> en el cual incluiremos la etiqueta `<option></option>`, dicha etiqueta se utiliza con el atributo <strong>value</strong>.

>> Además si se quiere agregar un boton, se le asigna el valor "submit" al atributo <strong>type</strong> en la etiqueta input y con el atributo <strong>value</strong> se le asigna el texto que mostrara el boton.

</div>
</div>