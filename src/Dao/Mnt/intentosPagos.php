<?php

namespace Dao\Mnt;

use Dao\Table;

class IntentosPagos extends Table
{
    public static function obtenerTodos()
    {
        $sqlstr = "select * from intentosPagos;";
        return self::obtenerRegistros(
            $sqlstr,
            array()
        );
    }
    public static function obtenerPorIntentosId($id)
    {
        $sqlstr = "select * from intentosPagos where id=:id;";
        return self::obtenerUnRegistro(
            $sqlstr,
            array("id"=>$id)
        );
    }

    public static function nuevaIntentoPagos($cliente, $monto, $fechaNow, $fechaVencimiento, $estado)
    {
        $sqlstr= "INSERT INTO intentosPagos (cliente, monto, fechaNow, fechaVencimiento, estado) values (:cliente, :monto, :fechaNow, :fechaVencimiento, :estado);";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "cliente"=>$cliente,
                "monto"=>$monto,
                "fechaNow"=>$fechaNow,
                "fechaVencimiento"=>$fechaVencimiento,
                "estado"=>$estado,
            )
        );
    }

    public static function actualizarIntentosPagos($cliente, $monto, $fechaNow, $fechaVencimiento, $estado, $id)
    {
        $sqlstr = "UPDATE intentosPagos set cliente=:cliente, monto=:monto, fechaNow=:fechaNow, fechaVencimiento=:fechaVencimiento, estado=:estado where id=:id";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "cliente"=> $cliente,
                "monto"=> $monto,
                "fechaNow"=>$fechaNow,
                "fechaVencimiento"=> $fechaVencimiento,
                "estado"=> $estado,
                "id"=>$id
            )
        );
    }
    public static function eliminarIntentosPagos($id)
    {
        $sqlstr = "DELETE FROM intentosPagos where id=:id;";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "id"=>$id
            )
        );
    }
}


?>
