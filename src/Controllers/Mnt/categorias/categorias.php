<?php
namespace Controllers\Mnt\categorias;

use Controllers\PublicController;
use Views\Renderer;

/*
 script de Categorias

*/
class categorias extends PublicController
{
    public function run(): void
    {
        $viewData = array();
        $viewData["categorias"]
            = \Dao\Mnt\categorias::obtenerTodos();
        Renderer::render('mnt/categorias', $viewData);
    }
}

?>
