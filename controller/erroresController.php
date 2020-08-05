<?php

require_once 'service/menuService.php';

class ErroresController extends Controller{

    private $menuService;

    function __construct(){
        parent::__construct();               
       //echo "<p>construct ErroresController</p>";
        $this->view->menu = [];
        $this->menuService= new MenuService();
    }

	function render(){
        //echo "<p>ErroresController render</p>";        
         $this->view->mensaje = "Hubo un error en la solicitud o no existe la página";
        $menu = $this->menuService->loadMenuByIdPerfil(1,0);
        $this->view->menu = $menu;
        $this->view->render('errores');
    }
}

?>
