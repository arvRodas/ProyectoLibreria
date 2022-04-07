<?php
namespace Controllers\Mnt\colaboradores;

use Controllers\PublicController;
use Views\Renderer;

/*
 `colaboradores`

*/
class colaboradores extends PublicController
{
    public function run(): void
    {
        $viewData = array();
        $viewData["colaboradores"]
            = \Dao\Mnt\colaboradores::obtenerTodos();
        Renderer::render('mnt/colaboradores', $viewData);
    }
}

?>
