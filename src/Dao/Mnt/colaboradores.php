<?php

namespace Dao\Mnt;

use Dao\Table;

class Colaboradores extends Table
{
    public static function obtenerTodos()
    {
        $sqlstr = "select * from colaboradores;";
        return self::obtenerRegistros(
            $sqlstr,
            array()
        );
    }
    public static function obtenerPorColaboradorId($idColaborador)
    {
        $sqlstr = "select * from colaboradores where idColaborador=:idColaborador;";
        return self::obtenerUnRegistro(
            $sqlstr,
            array("idColaborador"=>$idColaborador)
        );
    }

    public static function nuevoColaborador($nombre, $apellido, $direccion, $correo, $fechaNacimiento, $telefono, $sexo)
    {
        $sqlstr= "INSERT INTO colaboradores (nombre, apellido, direccion,correo, fechaNacimiento, telefono, sexo) values (:nombre, :apellido :direccion, :correo, :fechaNacimiento, :telefono, :sexo);";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "nombre"=>$nombre,
                "apellido"=>$apellido,
                "direccion"=>$direccion,
                "correo"=>$correo,
                "fechaNacimiento"=>$fechaNacimiento,
                "telefono"=>$telefono,
                "sexo"=>$sexo,
            )
        );
    }

    public static function actualizarColaborador($nombre, $apellido, $direccion, $correo,$fechaNacimiento, $telefono, $sexo, $idColaborador)
    {
        $sqlstr = "UPDATE colaboradores set nombre=:nombre, apellido=:apellido, direccion=:direccion, correo=:correo, fechaNacimiento=:fechaNacimiento,telefono=:telefono,sexo=:sexo where idColaborador=:idColaborador";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "nombre"=>$nombre,
                "apellido"=>$apellido,
                "direccion"=>$direccion,
                "correo"=>$correo,
                "fechaNacimiento"=>$fechaNacimiento,
                "telefono"=>$telefono,
                "sexo"=>$sexo,
                "idColaborador"=>$idColaborador
            )
        );
    }
    public static function eliminarColaborador($idColaborador)
    {
        $sqlstr = "DELETE FROM colaboradores where idColaborador=:idColaborador;";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "idColaborador"=>$idColaborador
            )
        );
    }
}


?>
