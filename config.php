<?php

     class Conectar //clase de conexión con nuestra base de datos que adjunto llamada "fotos.sql"
         {


            public static function con()
              {


                $con=mysql_connect("server","user","password");

                mysql_select_db("data base");

                return $con;





              }





         }







?>