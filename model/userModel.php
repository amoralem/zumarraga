<?php

include_once 'model/user.php';

class UserModel extends Model{
        private $usuarioObj;        

        function __construct(){
        
            parent::__construct(); 
            $this->usuarioObj=null;   

        }

        public function userExists($user, $pass){
            $md5pass = md5($pass);
            $query =$this->db->connect()->prepare('SELECT * FROM usuario WHERE usuario = :user AND contrasenia = :pass AND activo = 1');
            $query->execute(['user' => $user, 'pass' => $md5pass]);

            if($query->rowCount()){
                return true;
            }else{
                return false;
            }
        }

        public function setUser($user){
            
            $query = $this->db->connect()->prepare('SELECT * FROM usuario WHERE usuario = :user AND activo = 1');
            $query->execute(['user' => $user]);
            
            foreach ($query as $currentUser) { 
                $this->usuarioObj = new User();              
                 $this->usuarioObj->usuario= $currentUser['usuario'];    
                 $this->usuarioObj->nombre= $currentUser['nombre'];
                 $this->usuarioObj->ap_Paterno= $currentUser['ap_Paterno'];
                 $this->usuarioObj->ap_Materno= $currentUser['ap_Materno'];
                 $this->usuarioObj->activo= $currentUser['activo'];
                 $this->usuarioObj->resetContrasenia= $currentUser['resetContrasenia'];
                 $this->usuarioObj->idPerfil= $currentUser['idPerfil'];
   
            }

            //$this->usuarioObj=$item;
            return $this->usuarioObj;
        }

        public function getUsuario(){
            return $this->usuarioObj;
        }
    }

?>