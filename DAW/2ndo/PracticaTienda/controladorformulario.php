<?php

class ControladorFormularios
{

    static public function ctrRegistro()
    {

        if (isset($_POST["nombre"])) {

            $tabla = "usuarios";
            $datos = array("nombre" => $_POST["nombre"], "email" => $_POST["email"], "contrasena" => $_POST["contrasena"]);

            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }

    static public function ctrSeleccionarRegistros()
    {
        $tabla = "usuarios";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla);


        return $respuesta;
    }
}
