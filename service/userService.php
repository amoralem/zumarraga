<?php
include_once 'model/userModel.php';
include_once 'model/user.php';
class UserService{

    private $usuarioModel;
    private $usuarioObj;

    public function __construct(){        
        $this->usuarioModel= new UserModel();
        $this->usuarioObj= new User(); 

    }

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;        
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }

    public function userExists($userForm, $passForm){
        return $this->usuarioModel->userExists($userForm, $passForm);
    }

    public function setUser($user){
        $this->usuarioObj=$this->usuarioModel->setUser($user);

    }

    public function getUsuario(){
        return $this->usuarioObj;
    }

}

?>