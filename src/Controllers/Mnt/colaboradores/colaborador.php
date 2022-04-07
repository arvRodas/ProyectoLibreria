<?php
namespace Controllers\Mnt\colaboradores;

use Controllers\PublicController;
use Views\Renderer; 

class Colaborador extends PublicController
{
 
    private $_modeStrings = array(
        "INS" => "Nuevo Colaborador",
        "UPD" => "Editar %s (%s)",
        "DSP" => "Detalle de %s (%s)",
        "DEL" => "Eliminando %s (%s)"
    );
    private $_catestOptions = array(
        "femenino" => "femenino",
        "masculino" => "masculino"
    );
    private $_viewData = array(
        "mode"=>"INS",
        "idColaborador"=>0,
        "nombre"=>"",
        "apellido"=>"",
        "direccion"=>"",
        "correo"=>"",
        "FechaNacimiento"=>"",
        "telefono"=>0,
        "sexo"=>"masculino",
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
        if (isset($_GET["idColaborador"])) {
            $this->_viewData["idColaborador"] = $_GET["idColaborador"];
        }
        if (!isset($this->_modeStrings[$this->_viewData["mode"]])) {
            error_log(
                $this->toString() . " Mode not valid " . $this->_viewData["mode"],
                0
            );
            \Utilities\Site::redirectToWithMsg(
                'index.php?page=mnt.colaboradores.colaboradores', /*este es de controller o views?*/
                'Sucedio un error al procesar la página.'
            );
        }
        if ($this->_viewData["mode"] !== "INS" && intval($this->_viewData["idColaborador"], 10) !== 0) {
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


        if (!(isset($_SESSION["colaborador_crsxToken"])
            && $_SESSION["colaborador_crsxToken"] == $this->_viewData["crsxToken"] )
        ) {
            unset($_SESSION["colaborador_crsxToken"]);
            \Utilities\Site::redirectToWithMsg(
                'index.php?page=mnt.colaboradores.colaboradores',
                'Ocurrio un error, no se puede procesar el formulario.'
            );
        }


        $this->_viewData["idColaborador"] = intval($this->_viewData["idColaborador"], 10);
        if (!\Utilities\Validators::isMatch(
            $this->_viewData["sexo"],
            "/^(femenino)|(masculino)$/"
        )
        ) {
            $this->_viewData["errors"][] = "sexo debe ser MAS O FEM";
        }

        if (isset($this->_viewData["errors"]) && count($this->_viewData["errors"]) > 0 ) {

        } else {
            unset($_SESSION["colaborador_crsxToken"]);
            switch ($this->_viewData["mode"]) {
            case 'INS':
                # code...
                $result = \Dao\Mnt\colaboradores::nuevoColaborador(
                    $this->_viewData["nombre"],
                    $this->_viewData["apellido"],
                    $this->_viewData["direccion"],
                    $this->_viewData["correo"],
                    $this->_viewData["fechaNacimiento"],
                    $this->_viewData["telefono"],
                    $this->_viewData["sexo"],
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.colaboradores.colaboradores',
                        "colaborador guardado satisfactoriamente!"
                    );
                }
                break;
            case 'UPD':
                $result = \Dao\Mnt\colaboradores::actualizarColaborador(
                    $this->_viewData["nombre"],
                    $this->_viewData["apellido"],
                    $this->_viewData["direccion"],
                    $this->_viewData["correo"],
                    $this->_viewData["fechaNacimiento"],
                    $this->_viewData["telefono"],
                    $this->_viewData["sexo"],
                    $this->_viewData["idColaborador"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.colaboradores.colaboradores',
                        "colaborador actualizado satisfactoriamente!"
                    );
                }
                break;
            case 'DEL':
                $result = \Dao\Mnt\colaboradores::eliminarColaborador(
                    $this->_viewData["idColaborador"]
                );
                if ($result) {
                    \Utilities\Site::redirectToWithMsg(
                        'index.php?page=mnt.colaboradores.colaboradores',
                        "colaborador eliminado satisfactoriamente!"
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
            $tmpCategoria = \Dao\Mnt\colaboradores::obtenerPorColaboradorId(
                intval($this->_viewData["idColaborador"], 10)
            );
            \Utilities\ArrUtils::mergeFullArrayTo($tmpCategoria, $this->_viewData);
            $this->_viewData["modeDsc"] = sprintf(
                $this->_modeStrings[$this->_viewData["mode"]],
                $this->_viewData["nombre"],
                    $this->_viewData["apellido"],
                    $this->_viewData["direccion"],
                    $this->_viewData["correo"],
                    $this->_viewData["fechaNacimiento"],
                    $this->_viewData["telefono"],
                    $this->_viewData["idColaborador"]
            );
        }
        $this->_viewData["catestOptions"]
            = \Utilities\ArrUtils::toOptionsArray(
                $this->_catestOptions,
                'value',
                'text',
                'selected',
                $this->_viewData['sexo']
            );

        $this->_viewData["crsxToken"] = md5(time()."colaborador");
        $_SESSION["colaborador_crsxToken"] = $this->_viewData["crsxToken"]; 
    }
    public function run(): void
    {
        $this->init();
        if ($this->isPostBack()) {
            $this->handlePost();
        }
        $this->prepareViewData();
        Renderer::render('mnt/colaborador', $this->_viewData);
    }
}

?>