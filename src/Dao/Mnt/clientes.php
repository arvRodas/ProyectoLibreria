<?php

namespace Dao\Mnt;

use Dao\Table;

class Clientes extends Table
{
    public static function obtenerTodos()
    {
        $sqlstr = "select * from clientes;";
        return self::obtenerRegistros(
            $sqlstr,
            array()
        );
    }
    public static function obtenerPorClientesId($idCliente)
    {
        $sqlstr = "select * from clientes where idCliente=:idCliente;";
        return self::obtenerUnRegistro(
            $sqlstr,
            array("idCliente"=>$idCliente)
        );
    }

    public static function nuevoCliente($nombre, $apellido, $direccion, $telefono, $correo, $estado)
    {
        $sqlstr= "INSERT INTO clientes (nombre, apellido, direccion, telefono, correo, estado) values (:nombre, :apellido, :direccion, :telefono, :correo, :estado);";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "nombre"=>$nombre,
                "apellido"=>$apellido,
                "direccion"=>$direccion,
                "telefono"=>$telefono,
                "correo"=>$correo,
                "estado"=>$estado
            )
        );
    }

    public static function actualizarCliente($nombre, $apellido, $direccion, $telefono, $correo, $estado, $idCliente)
    {
        $sqlstr = "UPDATE clientes set nombre=:nombre, apellido=:apellido, direccion=:direccion, telefono=:telefono, correo=:correo, estado=:estado where idCliente=:idCliente";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "nombre"=>$nombre,
                "apellido"=>$apellido,
                "direccion"=>$direccion,
                "telefono"=>$telefono,
                "correo"=>$correo,
                "estado"=>$estado,
                "idCliente"=>$idCliente
            )
        );
    }
    public static function eliminarCliente($idCliente)
    {
        $sqlstr = "DELETE FROM clientes where idCliente=:idCliente;";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "idCliente"=>$idCliente
            )
        );
    }
}


?>
