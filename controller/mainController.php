<?php

include_once 'service/menuService.php';
include_once 'model/userModel.php';
include_once 'model/user.php';

class MainController extends Controller{

    private $menuService;

    function __construct(){
        parent::__construct();
       // echo "<p>Nuevo controlador Main</p>";
        $this->view->menu = [];
        $this->menuService= new MenuService();
        $this->usuarioModel= new UserModel();
    }

    function render(){
        //echo "<p>Nuevo controlador Main render</p>";
        //1.-Validar
        $user=$this->usuarioModel->setUser('morales');
        //echo "<p>$user</p>";
        $idPerfil=($user==null) ? 1 : $user->idPerfil;
        //echo "<p>idPerfil: $idPerfil</p>";
        $menu = $this->menuService->loadMenuByIdPerfil($idPerfil,0);
        $this->view->menu = $menu;
        $this->view->render('main');
    }

   /* function valida(){

        //1.-Si existe session
        $this->view->user = $userSession->getCurrentUser();

        //2.-
        if(isset($_POST['username']) && isset($_POST['password'])){

            $userForm = $_POST['username'];
            $passForm = $_POST['password'];

            $user = new User();
            if($user->userExists($userForm, $passForm)){
                    //echo "Existe el usuario";
                    $userSession->setCurrentUser($userForm);
                    $user->setUser($userForm);
                    //seleccinar el perfil
        }else{

                    $errorLogin = "Nombre de usuario y/o password incorrecto";
                    //ir a login
        }


    }*/

    
}

?>