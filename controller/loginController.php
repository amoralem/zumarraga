<?php

require_once 'service/menuService.php';

class LoginController extends Controller{

    private $menuService;

    function __construct(){
        parent::__construct();
       // echo "<p>Nuevo controlador User</p>";
        $this->view->menu = [];
        $this->menuService= new MenuService();
    }

    function render(){
        //echo "<p>ErroresController render</p>";        
        $this->view->errorLogin = "Usuario incorrecto";
        $menu = $this->menuService->loadMenuByIdPerfil(1,0);
        $this->view->menu = $menu;
        $this->view->render('includes/login');
    }

   
}

?>