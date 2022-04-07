<?php
namespace Controllers\Mnt\categorias;

use Controllers\PublicController;
use Views\Renderer; 

class Categoria extends PublicController
{
 
    private $_modeStrings = array(
        "INS" => "Nueva Categoria",
        "UPD" => "Editar %s (%s)",
        "DSP" => "Detalle de %s (%s)",
        "DEL" => "Eliminando %s (%s)"
    );
    private $_catestOptions = array(/*esta no va--------------- */
        "ENV" => "Enviado",
        "PGD" => "Pagado",
        "CNL" => "Cancelado",
        "ERR" => "Error",
    );
    private $_viewData = array(
        "mode"=>"INS",
        "catid"=>0,
        "catnom"=>"",
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
        if (isset($_GET["catid"])) {
            $this->_viewData["catid"] = $_GET["catid"];
        }
        if (!isset($this->_modeStrings[$this->_viewData["mode"]])) {
            error_log(
                $this->toString() . " Mode not valid " . $this->_viewData["mode"],
                0
            );
            \Utilities\Site::redirectToWithMsg(
                'index.php?page=mnt.categorias.categorias', /*este es de controller o views?*/
                'Sucedio un error al procesar la página.'
            );
        }
        if ($this->_viewData["mode"] !== "INS" && intval($this->_viewData["catid"], 10) !== 0) {
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


        if (!(isset($_SESSION["categoria_crsxToken"])
            && $_SESSION["categoria_crsxToken"] == $this->_viewData["crsxToken"] )
        ) {
            unset($_SESSION["categoria_crsxToken"]);
            \Utilities\Site::redirectToWithMsg(
                'index.php?page=mnt.categorias.categorias',
                'Ocurrio un error, no se puede procesar el formulario.'
            );
        }


       /* $this->_viewData["catid"] = intval($this->_viewData["catid"], 10);
        if (!\Utilities\Validators::isMatch(
            $this->_viewData["estado"],
            "/^(ENV)|(PGD)|(CNL)|(ERR)$/"
        )
        ) {
            $this->_viewData["errors"][] = "categoria debe ser ENV, PGD, CNL o ERR";
        }*/

        if (isset($this->_viewData["errors"]) && count($this->_viewData["errors"]) > 0 ) {

        } else {
            unset($_SESSION["categoria_crsxToken"]);
            switch ($this->_viewData["mode"]) {
            case 'INS':
                # code...
                $result = \Dao\Mnt\categorias::nuevaCategoria(
                    $this->_viewData["catnom"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.categorias.categorias',
                        "¡Categoria guardado satisfactoriamente!"
                    );
                }
                break;
            case 'UPD':
                $result = \Dao\Mnt\categorias::actualizarCategoria(
                    $this->_viewData["catnom"],
                    $this->_viewData["catid"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.categorias.categorias',
                        "Categoria actualizado satisfactoriamente!"
                    );
                }
                break;
            case 'DEL':
                $result = \Dao\Mnt\categorias::eliminarCategoria(
                    $this->_viewData["catid"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.categorias.categorias',
                        "Categoria eliminado satisfactoriamente!"
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
            $tmpCategoria = \Dao\Mnt\categorias::obtenerPorCategoriaId(
                intval($this->_viewData["catid"], 10)
            );
            \Utilities\ArrUtils::mergeFullArrayTo($tmpCategoria, $this->_viewData);
            $this->_viewData["modeDsc"] = sprintf(
                $this->_modeStrings[$this->_viewData["mode"]],
                $this->_viewData["catnom"],
                $this->_viewData["catid"]
            );
        }
        /*$this->_viewData["catestOptions"]
            = \Utilities\ArrUtils::toOptionsArray(
                $this->_catestOptions,
                'value',
                'text',
                'selected',
                $this->_viewData['estado']
            );*/

        $this->_viewData["crsxToken"] = md5(time()."categoria");
        $_SESSION["categoria_crsxToken"] = $this->_viewData["crsxToken"]; 
    }
    public function run(): void
    {
        $this->init();
        if ($this->isPostBack()) {
            $this->handlePost();
        }
        $this->prepareViewData();
        Renderer::render('mnt/categoria', $this->_viewData);
    }
}

?>