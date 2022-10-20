<?php
    class controladoresRegistro{

        static public function cRegistros($contraseña, $repContraseña /*pasar contrseñas y repetir contraseña*/){
            
            if ($contraseña == $repContraseña) {

                return (true);

            }

        }

    }
?>