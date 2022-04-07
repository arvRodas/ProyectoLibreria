<?php
namespace Controllers\Mnt\intentosPagos;

use Controllers\PublicController;
use Views\Renderer; 

class IntentoPago extends PublicController
{
 
    private $_modeStrings = array(
        "INS" => "Nuevo IntentoPago",
        "UPD" => "Editar %s (%s)",
        "DSP" => "Detalle de %s (%s)",
        "DEL" => "Eliminando %s (%s)"
    );
    private $_catestOptions = array(
        "ENV" => "Enviado",
        "PGD" => "Pagado",
        "CNL" => "Cancelado",
        "ERR" => "Error",
    );
    private $_viewData = array(
        "mode"=>"INS",
        "id"=>0,
        "cliente"=>"",
        "monto"=>"",
        "fechaNow"=>"",
        "fechaVencimiento"=>"",
        "estado"=>"ENV",
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
        if (isset($_GET["id"])) {
            $this->_viewData["id"] = $_GET["id"];
        }
        if (!isset($this->_modeStrings[$this->_viewData["mode"]])) {
            error_log(
                $this->toString() . " Mode not valid " . $this->_viewData["mode"],
                0
            );
            \Utilities\Site::redirectToWithMsg(
                'index.php?page=mnt.intentosPagos.intentosPagos', /*este es de controller o views?*/
                'Sucedio un error al procesar la página.'
            );
        }
        if ($this->_viewData["mode"] !== "INS" && intval($this->_viewData["id"], 10) !== 0) {
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


        if (!(isset($_SESSION["intentoPago_crsxToken"])
            && $_SESSION["intentoPago_crsxToken"] == $this->_viewData["crsxToken"] )
        ) {
            unset($_SESSION["intentoPago_crsxToken"]);
            \Utilities\Site::redirectToWithMsg(
                'index.php?page=mnt.intentosPagos.intentosPagos',
                'Ocurrio un error, no se puede procesar el formulario.'
            );
        }


        $this->_viewData["id"] = intval($this->_viewData["id"], 10);
        if (!\Utilities\Validators::isMatch(
            $this->_viewData["estado"],
            "/^(ENV)|(PGD)|(CNL)|(ERR)$/"
        )
        ) {
            $this->_viewData["errors"][] = "intentoPago debe ser ENV, PGD, CNL o ERR";
        }

        if (isset($this->_viewData["errors"]) && count($this->_viewData["errors"]) > 0 ) {

        } else {
            unset($_SESSION["intentoPago_crsxToken"]);
            switch ($this->_viewData["mode"]) {
            case 'INS':
                # code...
                $result = \Dao\Mnt\intentosPagos::nuevaIntentoPagos(
                    $this->_viewData["cliente"],
                    $this->_viewData["monto"],
                    $this->_viewData["fechaNow"],
                    $this->_viewData["fechaVencimiento"],
                    $this->_viewData["estado"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.intentosPagos.intentosPagos',
                        "¡intentoPago guardado satisfactoriamente!"
                    );
                }
                break;
            case 'UPD':
                $result = \Dao\Mnt\intentosPagos::actualizarIntentosPagos(
                    $this->_viewData["cliente"],
                    $this->_viewData["monto"],
                    $this->_viewData["fechaNow"],
                    $this->_viewData["fechaVencimiento"],
                    $this->_viewData["estado"],
                    $this->_viewData["id"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.intentosPagos.intentosPagos',
                        "¡intentoPago actualizado satisfactoriamente!"
                    );
                }
                break;
            case 'DEL':
                $result = \Dao\Mnt\intentosPagos::eliminarIntentosPagos(
                    $this->_viewData["id"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.intentosPagos.intentosPagos',
                        "¡intentoPago eliminado satisfactoriamente!"
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
            $tmpCategoria = \Dao\Mnt\intentosPagos::obtenerPorIntentosId(
                intval($this->_viewData["id"], 10)
            );
            \Utilities\ArrUtils::mergeFullArrayTo($tmpCategoria, $this->_viewData);
            $this->_viewData["modeDsc"] = sprintf(
                $this->_modeStrings[$this->_viewData["mode"]],
                $this->_viewData["cliente"],
                $this->_viewData["monto"],
                $this->_viewData["fechaNow"],
                $this->_viewData["fechaVencimiento"],
                $this->_viewData["id"]
            );
        }
        $this->_viewData["catestOptions"]
            = \Utilities\ArrUtils::toOptionsArray(
                $this->_catestOptions,
                'value',
                'text',
                'selected',
                $this->_viewData['estado']
            );

        $this->_viewData["crsxToken"] = md5(time()."intentoPago");
        $_SESSION["intentoPago_crsxToken"] = $this->_viewData["crsxToken"]; 
    }
    public function run(): void
    {
        $this->init();
        if ($this->isPostBack()) {
            $this->handlePost();
        }
        $this->prepareViewData();
        Renderer::render('mnt/intentoPago', $this->_viewData);
    }
}

?>