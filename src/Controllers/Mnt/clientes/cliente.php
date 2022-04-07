<?php
namespace Controllers\Mnt\clientes;

use Controllers\PublicController;
use Views\Renderer; 

class Cliente extends PublicController
{
 
    private $_modeStrings = array(
        "INS" => "Nuevo Cliente",
        "UPD" => "Editar %s (%s)",
        "DSP" => "Detalle de %s (%s)",
        "DEL" => "Eliminando %s (%s)"
    );
    private $_catestOptions = array(
        "Activo" => "Activo",
        "Inactivo" => "Inactivo",
    );
    private $_viewData = array(
        "mode"=>"INS",
        "idCliente"=>0,
        "nombre"=>"",
        "apellido"=>"",
        "direccion"=>"",
        "telefono"=>"",
        "correo"=>"",
        "estado"=>"Activo",
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
        if (isset($_GET["idCliente"])) {
            $this->_viewData["idCliente"] = $_GET["idCliente"];
        }
        if (!isset($this->_modeStrings[$this->_viewData["mode"]])) {
            error_log(
                $this->toString() . " Mode not valid " . $this->_viewData["mode"],
                0
            );
            \Utilities\Site::redirectToWithMsg(
                'index.php?page=mnt.clientes.clientes', /*este es de controller o views?*/
                'Sucedio un error al procesar la página.'
            );
        }
        if ($this->_viewData["mode"] !== "INS" && intval($this->_viewData["idCliente"], 10) !== 0) {
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


        if (!(isset($_SESSION["cliente_crsxToken"])
            && $_SESSION["cliente_crsxToken"] == $this->_viewData["crsxToken"] )
        ) {
            unset($_SESSION["cliente_crsxToken"]);
            \Utilities\Site::redirectToWithMsg(
                'index.php?page=mnt.clientes.clientes',
                'Ocurrio un error, no se puede procesar el formulario.'
            );
        }


        $this->_viewData["idCliente"] = intval($this->_viewData["idCliente"], 10);
        if (!\Utilities\Validators::isMatch(
            $this->_viewData["estado"],
            "/^(Activo)|(Inactivo)$/"
        )
        ) {
            $this->_viewData["errors"][] = "estado debe ser ACT, INA";
        }

        if (isset($this->_viewData["errors"]) && count($this->_viewData["errors"]) > 0 ) {

        } else {
            unset($_SESSION["cliente_crsxToken"]);
            switch ($this->_viewData["mode"]) {
            case 'INS':
                # code...
                $result = \Dao\Mnt\clientes::nuevoCliente(
                    $this->_viewData["nombre"],
                    $this->_viewData["apellido"],
                    $this->_viewData["direccion"],
                    $this->_viewData["telefono"],
                    $this->_viewData["correo"],
                    $this->_viewData["estado"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.clientes.clientes',
                        "¡Cliente guardado satisfactoriamente!"
                    );
                }
                break;
            case 'UPD':
                $result = \Dao\Mnt\clientes::actualizarCliente(
                    $this->_viewData["nombre"],
                    $this->_viewData["apellido"],
                    $this->_viewData["direccion"],
                    $this->_viewData["telefono"],
                    $this->_viewData["correo"],
                    $this->_viewData["estado"],
                    $this->_viewData["idCliente"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.clientes.clientes',
                        "Cliente actualizado satisfactoriamente!"
                    );
                }
                break;
            case 'DEL':
                $result = \Dao\Mnt\clientes::eliminarCliente(
                    $this->_viewData["idCliente"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.clientes.clientes',
                        "¡Cliente eliminado satisfactoriamente!"
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
            $tmpCategoria = \Dao\Mnt\clientes::obtenerPorClientesId(
                intval($this->_viewData["idCliente"], 10)
            );
            \Utilities\ArrUtils::mergeFullArrayTo($tmpCategoria, $this->_viewData);
            $this->_viewData["modeDsc"] = sprintf(
                $this->_viewData["nombre"],
                     $this->_viewData["apellido"],
                    $this->_viewData["direccion"],
                    $this->_viewData["telefono"],
                    $this->_viewData["correo"],
                    $this->_viewData["idCliente"]
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

        $this->_viewData["crsxToken"] = md5(time()."cliente");
        $_SESSION["cliente_crsxToken"] = $this->_viewData["crsxToken"]; 
    }
    public function run(): void
    {
        $this->init();
        if ($this->isPostBack()) {
            $this->handlePost();
        }
        $this->prepareViewData();
        Renderer::render('mnt/cliente', $this->_viewData);
    }
}

?>