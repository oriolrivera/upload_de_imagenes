<?php

  require_once("config.php"); //archivo de conexión

   class Controller
     {
          private $ver=array();


        public function Trabajo_Img()
                   {




                   $nombre_imagen = $_FILES["foto"]["name"];

                   $nom_temporal = $_FILES["foto"]["tmp_name"];



               



                   $ext_img = pathinfo($nombre_imagen);

             

           $foto=$_FILES["foto"]["name"]; //recatamos el nombre del campo foto de nuestro formulario y lo guardamos en la variable $foto. 

           $ext = array( "jpeg","jpg", "png", "gif"); //arreglo para rrecorer las diferentes extensiones de nuestras imagenes permitidas para subir.

           $url_nueva = "imagenes/".$foto; //ruta a guardar nuestras imagenes concatenada con la varible foto para asi guardar con su nombre original.

           if (is_uploaded_file($nom_temporal)) { 

            if (array_search($ext_img["extension"],$ext)) { //rrecoremos las estensiones para determinar si son las que permotimo

               copy($nom_temporal, $url_nueva); //copiamos la imagen en la carpeta imagenes que esta guardad en nuestra varible $url_nueva

                echo "La imagen se ha guardado correctamente"; //mensaje

                  //insertamos los datos rescatados de nuestro formulario en nuestra base de datos
                                  
                   $sql="insert into fotos
                                    (id_foto,nom,foto)

                                        values

                                    (null, '".$_POST["nom"]."', '$nom')";

                                $res=mysql_query($sql,Conectar::con());

                                   header("Location:home.php");


           }else{
                 //menseaje si el formato de imagenes no es el permitido
              echo "

                  <script type='text/javascript'>
                            alert('Error: solo imagenes con formato (jpge, jpg, png o gif)');
                            window.location='index.php';


                  </script>

              ";
              


           }

       }else{
             //mensaje si no se elige imagen
          
            echo "

                  <script type='text/javascript'>
                            alert('Elija una imagen');
                            window.location='demo2.php';


                  </script>

              ";
       }





     
          }


             public function selec()

                           {



                              $sql="select * from fotos";

                            $res=mysql_query($sql,Conectar::con());

                             while ($reg=mysql_fetch_array($res)) {

                                  $this->ver[]=$reg;



                                }

                                return $this->ver;



                     }





     }







?>