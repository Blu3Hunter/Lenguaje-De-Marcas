<?php
require_once "conexion.php";

class ModeloFormularios
{


    static public function mdlRegistro($tabla, $datos)
    {

        // statement -> declaracion 

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,email, contrasena) VALUES (:nombre,:email,:contrasena)");

        /*bindParam(), vincula una vatriable php a un parametro de sustitucion con nombre o de signo de interrogacion correcpondientes a la secuencia sql que fue usada para preparar la centencia*/

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":contrasena", $datos["contrasena"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        } else {

            print_r(Conexion::conectar()->errorInfo());
        }
    }

    static public function mdlSeleccionarRegistros($tabla)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}