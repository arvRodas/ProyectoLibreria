<?php
namespace Controllers\Mnt\clientes;

use Controllers\PublicController;
use Views\Renderer;

/*
 Tabla de Clientes

*/
class clientes extends PublicController
{
    public function run(): void
    {
        $viewData = array();
        $viewData["clientes"]
            = \Dao\Mnt\clientes::obtenerTodos();
        Renderer::render('mnt/clientes', $viewData);
    }
}

?>
