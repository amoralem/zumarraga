<?php

require_once 'service/menuService.php';
require_once 'service/userService.php';
include_once 'model/user.php';

class ErroresController extends Controller{

    private $menuService;
    private $usuarioService;
    private $usuarioObj;

    function __construct(){
        parent::__construct();               
       //echo "<p>construct ErroresController</p>";
        $this->view->menu = [];
        $this->menuService= new MenuService();
        $this->usuarioService= new UserService();
    }

	function render($session){
        //echo "<p>ErroresController render</p>";
       if($session){

            $this->usuarioService->setUser($this->usuarioService->getCurrentUser());
            $this->usuarioObj= new User();
            $this->usuarioObj=$this->usuarioService->getUsuario();
            $idPerfil=$this->usuarioObj->idPerfil;             
            $this->renderView('errores',$idPerfil);

        }else{

            $this->usuarioObj= new User();
            $this->usuarioObj->idPerfil=1;
            $this->renderView('errores',1);
        }
    }

    function renderView($view,$idPerfil){
         
        $menu = $this->menuService->loadMenuByIdPerfil($idPerfil,0);
        $this->view->mensaje = "Hubo un error en la solicitud contacte al administrador";
        $this->view->usuario = $this->usuarioObj;
        $this->view->menu = $menu;
        $this->view->render($view);
        
     }

}

?>
