<?php

require_once 'service/menuService.php';
require_once 'service/userService.php';
include_once 'model/user.php';

class LoginController extends Controller{

    private $menuService;
    private $usuarioService;
    private $usuarioObj;

    function __construct(){
        parent::__construct();
       // echo "<p>Nuevo controlador User</p>";
        $this->view->menu = [];
        $this->menuService= new MenuService();
        $this->usuarioService= new UserService();
    }

    function render($session){
        
        if($session){

            $this->usuarioService->setUser($this->usuarioService->getCurrentUser());
            $this->usuarioObj= new User();
            $this->usuarioObj=$this->usuarioService->getUsuario();
            $idPerfil=$this->usuarioObj->idPerfil;
            $this->renderView('main',$idPerfil);

        }else if(isset($_POST['username']) && isset($_POST['password'])){
            
            $userForm = $_POST['username'];
            $passForm = $_POST['password'];
            
            if($this->usuarioService->userExists($userForm, $passForm)){
                
                $this->usuarioService->setCurrentUser($userForm);
                $this->usuarioService->setUser($userForm);
                $this->usuarioObj= new User();
                $this->usuarioObj=$this->usuarioService->getUsuario();
                $idPerfil=$this->usuarioObj->idPerfil;
                $this->renderView('main',$idPerfil);

            }else{

                $this->view->errorLogin = "Nombre de usuario y/o password incorrecto";
                $this->usuarioObj= new User();
                $this->usuarioObj->idPerfil=1;
                $this->renderView('includes/login',1);

            }

        }else{

            $this->usuarioObj= new User();
            $this->usuarioObj->idPerfil=1;
            $this->renderView('includes/login',1);

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