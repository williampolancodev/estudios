> # Clase 5 – Estructura de HTML

<div style="text-align: justify">
<div style="text-indent: 0.8cm">

>> Un documento HTML lleva una estructura marcada o estándar, por lo cual, no se puede escribir etiquetas sin seguir una estructura. Esta estructura debe tener una cabecera y un cuerpo, y esto debe ir englobado en una etiqueta HTML. Lo primero será definir la versión de HTML que se esta utilizando con la etiqueta:


>>     <!DOCTYPE HTML>

>> La cual indica que se está utilizando la última versión de HTML que sería la 5.

>> Después se crea la etiqueta HTML, a la cual se le puede dar atributos siendo este caso el atributo lenguaje y se indica que su valor es el español. Después sigue el HEAD donde van los metadatos o va a ir información que no va a ser visible dentro de la página. Y en el caso de Body es la etiqueta que contendrá todo lo que se mostrara en el cuerpo de la página. 

>> Ejemplo:

<div style="margin-left: 2cm">

    <!DOCTYPE HTLM>
		<html lang="es">
			<head>
				<title>Mi primera web</title>
			</head>
			<body>
				<h1>Titulo de mi web</h1>
				<h2>Bienvenidos a mi web</h2>
			</body>
		</html>

</div>

>> Las etiquetas “h1-h6” se utilizan para darle una relevancia al texto, por lo cual, en términos de SEO solo debería existir  uno de tipo h1 y del resto de h2 a h6 pueden haber más en el texto, pero el h1 solo puede existir uno ya que el buscador siempre buscara el título de la página para posicionarla.



> ## Clase 6 – Etiquetas para textos

>> La etiqueta más importante para el texto seria la etiqueta (`<p></p>`), lo que se coloca dentro de esa etiqueta se considerará un texto. Cada etiqueta de "p" representara un parrafo diferente. En Lorem ipsum es una pagina en la cual texto generado, el cual podemos utilizar para rellenar nuestra pagina web. De esta manera se puede probar y observar como se ve el contenido o distribucion de la página.

>> Otra etiqueta importante que se utiliza en los textos, es la etiqueta para el salto de linea 
(`<br/>`), como es una etiqueta que no lleva contenido se cierra inmediatamente. Esto lo que hace es cumplir la funcion de "enter" que normalmente hacemos cuando escribimos en word o en un editor de texto. Por otro lado, la etiqueta `<hr/>` que agrega un  salto de linea y dibuja una linea.

>> También tenemos la etiqueta `</strong><strong>` que agrega negrita a un texto y la etiqueta `<em></em>` que agrega cursiva a un texto. En cambio la etiqueta `<span></span>` no agraga ninguna modificacion al texto, pero permite agregar un identificador(id) y una clase(class) los cuales permitiran que lo que contenga la etiqueta pueda ser modificado por css.

>> Asimismo existe la etiqueta `<i></i>` tambien le agrega al texto la forma cursiva. Y en el caso de presentar citas se utiliza la etiqueta `<blockquote></blockquote>`.

> ## Clase 7 - Listados

>> Hay dos tipos de listas las ordenadas y las desordenadas. Las ordenadas utilizan una numeración, mientras que las desordenadas solo untilizan una viñeta. Las listas ordenadas se crean con la etiqueta `<ol></ol>` (ol = ordenated list) y los elementos de la lista se crean utilizando  `<li></li>`. Mientras que para la lista desordenada se utiliza la etiqueta `<ul></ul>` (ul = unordenated list) y se utiliza la misma etiqueta "li" para crear.

>> Otra cosa que también podemos crear es una lista dentro de otra, es decir una sublista. Esto se hace colocando dentro de la etiqueta "li" una etiqueta de lista.

</div>
</div>