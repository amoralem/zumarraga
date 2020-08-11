<?php

include_once 'service/menuService.php';
require_once 'service/userService.php';
include_once 'model/user.php';

class MainController extends Controller{

    private $menuService;
    private $usuarioService;
    private $usuarioObj;

    function __construct(){
        parent::__construct();
       // echo "<p>Nuevo controlador Main</p>";
        $this->view->menu = [];
        $this->menuService= new MenuService();
        $this->usuarioService= new UserService();
    }

    function render($session){
        //echo "<p>Nuevo controlador Main render</p>";        
        if($session){

            $this->usuarioService->setUser($this->usuarioService->getCurrentUser());
            $this->usuarioObj= new User();
            $this->usuarioObj=$this->usuarioService->getUsuario();
            $idPerfil=$this->usuarioObj->idPerfil;             
            $this->renderView('main',$idPerfil);

        }else{

            $this->usuarioObj= new User();
            $this->usuarioObj->idPerfil=1;
            $this->renderView('main',1);
        }           
        
    }

    function renderView($view,$idPerfil){
         
        $menu = $this->menuService->loadMenuByIdPerfil($idPerfil,0);        
        $this->view->usuario = $this->usuarioObj;
        $this->view->menu = $menu;
        $this->view->render($view);
        
     }
    
}

?>