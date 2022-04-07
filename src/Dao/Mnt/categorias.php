<?php

namespace Dao\Mnt;

use Dao\Table;

class Categorias extends Table
{
    public static function obtenerTodos()
    {
        $sqlstr = "select * from categorias;";
        return self::obtenerRegistros(
            $sqlstr,
            array()
        );
    }
    public static function obtenerPorCategoriaId($catid)
    {
        $sqlstr = "select * from categorias where catid=:catid;";
        return self::obtenerUnRegistro(
            $sqlstr,
            array("catid"=>$catid)
        );
    }

    public static function nuevaCategoria($catnom)
    {
        $sqlstr= "INSERT INTO categorias (catnom) values (:catnom);";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "catnom"=>$catnom,
            )
        );
    }

    public static function actualizarCategoria($catnom,$catid)
    {
        $sqlstr = "UPDATE categorias set catnom=:catnom where catid=:catid";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "catnom"=> $catnom,
                "catid"=>$catid,
            )
        );
    }
    public static function eliminarCategoria($catid)
    {
        $sqlstr = "DELETE FROM categorias where catid=:catid;";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "catid"=>$catid
            )
        );
    }
}


?>
