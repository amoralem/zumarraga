<?php

require_once 'service/menuService.php';

class DirectorioController extends Controller{

    private $menuService;

    function __construct(){
        parent::__construct();               
       //echo "<p>construct ErroresController</p>";
        $this->view->menu = [];
        $this->menuService= new MenuService();
    }

    function render(){
        //echo "<p>ErroresController render</p>";        
        $this->view->mensaje = "Página en construcción";
        $menu = $this->menuService->loadMenuByIdPerfil(1,0);
        $this->view->menu = $menu;
        $this->view->render('includes/directorio');
    }
}

?>