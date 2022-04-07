<?php
namespace Controllers\Mnt\libros;

use Controllers\PublicController;
use Views\Renderer; 

class Libro extends PublicController
{
 
    private $_modeStrings = array(
        "INS" => "Nuevo Libro",
        "UPD" => "Editar %s (%s)",
        "DSP" => "Detalle de %s (%s)",
        "DEL" => "Eliminando %s (%s)"
    );
    private $_catestOptions = array(
        "ficcion" => "ficcion",
        "terror" => "terror",
        "comedia" => "comedia",
        "infantil" => "infantil",
    );
    private $_viewData = array(
        "mode"=>"INS",
        "idlibro"=>0,
        "nombreLibro"=>"",
        "catid"=>"terror",
        "stocklibro"=>0,
        "preciolibro"=>0,
        "editorial"=>"",
        "modeDsc"=>"",
        "readonly"=>false,
        "isInsert"=>false,
        "catestOptions"=>[],
        "crsxToken"=>""
    );

    
    private function init(){
        if (isset($_GET["mode"])) {
            $this->_viewData["mode"] = $_GET["mode"];
        }
        if (isset($_GET["idlibro"])) {
            $this->_viewData["idlibro"] = $_GET["idlibro"];
        }
        if (!isset($this->_modeStrings[$this->_viewData["mode"]])) {
            error_log(
                $this->toString() . " Mode not valid " . $this->_viewData["mode"],
                0
            );
            \Utilities\Site::redirectToWithMsg(
                'index.php?page=mnt.libros.libros', /*este es de controller o views?*/
                'Sucedio un error al procesar la página.'
            );
        }
        if ($this->_viewData["mode"] !== "INS" && intval($this->_viewData["idlibro"], 10) !== 0) {
            $this->_viewData["mode"] !== "DSP";
        }
    }
    private function tiempo()
    {
        $Object = new DateTime();  
        $DateAndTime = $Object->format("d-m-Y h:i:s a"); 
    }
    private function handlePost()
    {
        \Utilities\ArrUtils::mergeFullArrayTo($_POST, $this->_viewData);


        if (!(isset($_SESSION["libro_crsxToken"])
            && $_SESSION["libro_crsxToken"] == $this->_viewData["crsxToken"] )
        ) {
            unset($_SESSION["libro_crsxToken"]);
            \Utilities\Site::redirectToWithMsg(
                'index.php?page=mnt.libros.libros',
                'Ocurrio un error, no se puede procesar el formulario.'
            );
        }


        $this->_viewData["idlibro"] = intval($this->_viewData["idlibro"], 10);
       /* if (!\Utilities\Validators::isMatch(
            $this->_viewData["estado"],
            "/^(ENV)|(PGD)|(CNL)|(ERR)$/"
        )
        ) {
            $this->_viewData["errors"][] = "intentoPago debe ser ENV, PGD, CNL o ERR";
        }*/

        if (isset($this->_viewData["errors"]) && count($this->_viewData["errors"]) > 0 ) {

        } else {
            unset($_SESSION["libro_crsxToken"]);
            switch ($this->_viewData["mode"]) {
            case 'INS':
                # code...
                $result = \Dao\Mnt\libros::nuevoLibro(
                    $this->_viewData["nombreLibro"],
                    $this->_viewData["catid"],
                    $this->_viewData["stocklibro"],
                    $this->_viewData["preciolibro"],
                    $this->_viewData["editorial"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.libros.libros',
                        "¡Libro guardado satisfactoriamente!"
                    );
                }
                break;
            case 'UPD':
                $result = \Dao\Mnt\libros::actualizarLibro(
                    $this->_viewData["nombreLibro"],
                    $this->_viewData["catid"],
                    $this->_viewData["stocklibro"],
                    $this->_viewData["preciolibro"],
                    $this->_viewData["editorial"],
                    $this->_viewData["idlibro"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.libros.libros',
                        "Libro actualizado satisfactoriamente!"
                    );
                }
                break;
            case 'DEL':
                $result = \Dao\Mnt\libros::eliminarLibro(
                    $this->_viewData["idlibro"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.libros.libros',
                        "libro eliminado satisfactoriamente!"
                    );
                }
                break;
            default:
                # code...
                break;
            }
        }
    }
    private function prepareViewData()
    {
        if ($this->_viewData["mode"] == "INS") {
             $this->_viewData["modeDsc"]
                 = $this->_modeStrings[$this->_viewData["mode"]];
        } else {
            $tmpCategoria = \Dao\Mnt\libros::obtenerPorLibrosId(
                intval($this->_viewData["idlibro"], 10)
            );
            \Utilities\ArrUtils::mergeFullArrayTo($tmpCategoria, $this->_viewData);
            $this->_viewData["modeDsc"] = sprintf(
                $this->_modeStrings[$this->_viewData["mode"]],
                $this->_viewData["nombreLibro"],
                $this->_viewData["stocklibro"],
                $this->_viewData["preciolibro"],
                $this->_viewData["editorial"],
                $this->_viewData["idlibro"]
            );
        }
        $this->_viewData["catestOptions"]
            = \Utilities\ArrUtils::toOptionsArray(
                $this->_catestOptions,
                'value',
                'text',
                'selected',
                $this->_viewData['catid']
            );

        $this->_viewData["crsxToken"] = md5(time()."libro");
        $_SESSION["libro_crsxToken"] = $this->_viewData["crsxToken"]; 
    }
    public function run(): void
    {
        $this->init();
        if ($this->isPostBack()) {
            $this->handlePost();
        }
        $this->prepareViewData();
        Renderer::render('mnt/libro', $this->_viewData);
    }

    public function runn(): void
    {
        $viewData = array();
        $viewData["libros"]
            = \Dao\Mnt\libros::obtenerCategoriaLibro();
        Renderer::render('mnt/libros', $this-> _viewData);
    }
}

?>