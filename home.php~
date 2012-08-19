<?php


 require_once("subir.php");

  $obj=new Controller();

    $ver=$obj->selec(); //instancia de nuestro metodo de consulta


?>


<html>
<head>
	<title>Archivo para mostrar nuestra imagenes</title>
</head>
<body>



	<ul>

		<?php

                 for ($i=0; $i <sizeof($ver) ; $i++) {  //con este loop for recorremos los datos en la base de datos para mostrar el nombre de nuestra imagenes




		?>

		<li>
            //con img buscamos la ruta y despues imprimimos los nombres de las imagenes subidas al directorio imegenes.
            <img src="imagenes/<?php echo $ver[$i]["foto"]; ?>">

	   </li>

       <?php

            }// end for

        ?>


</ul>

</body>
</html>