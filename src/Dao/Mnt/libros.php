<?php

namespace Dao\Mnt;

use Dao\Table;

class Libros extends Table
{
    public static function obtenerTodos()
    {
        $sqlstr = "select * from libros;";
        return self::obtenerRegistros(
            $sqlstr,
            array()
        );
    }
    public static function obtenerPorLibrosId($idlibro)
    {
        $sqlstr = "select * from libros where idlibro=:idlibro;";
        return self::obtenerUnRegistro(
            $sqlstr,
            array("idlibro"=>$idlibro)
        );
    }

    public static function obtenerCategoriaLibro()
    {
        $sqlstr = "select l.nombrelibro from libros l left join categorias c on l.catid = c.catid;;";
        return self::obtenerUnnRegistro(
            $sqlstr,
            array()
        );
    }

    public static function nuevoLibro($nombrelibro, $catid, $stocklibro, $preciolibro, $editorial)
    {
        $sqlstr= "INSERT INTO libros (nombreLibro, catid, stocklibro, preciolibro, editorial) values (:nombrelibro, :catid, :stocklibro, :preciolibro, :editorial);";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "nombreLibro"=>$nombrelibro,
                "catid"=>$catid,
                "stocklibro"=>$stocklibro,
                "preciolibro"=>$preciolibro,
                "editorial"=>$editorial,
            )
        );
    }

    public static function actualizarLibro($nombrelibro, $catid, $stocklibro, $preciolibro, $editorial, $idlibro)
    {
        $sqlstr = "UPDATE libros set nombreLibro=:nombrelibro, catid=:catid, stocklibro=:stocklibro, preciolibro=:preciolibro, editorial=:editorial where idlibro=:idlibro";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "nombreLibro"=> $nombrelibro,
                "catid"=> $catid,
                "stocklibro"=>$stocklibro,
                "preciolibro"=> $preciolibro,
                "editorial"=> $editorial,
                "idlibro"=>$idlibro
            )
        );
    }
    public static function eliminarLibro($idlibro)
    {
        $sqlstr = "DELETE FROM libros where idlibro=:idlibro;";
        return self::executeNonQuery(
            $sqlstr,
            array(
                "idlibro"=>$idlibro
            )
        );
    }
}


?>
