<?php

include_once 'model/menu.php';

class MenuModel extends Model{

        private $listMenu;

        function __construct(){
        
            parent::__construct();
            $this->listMenu=[];

        }

        
         function getMenuByIdPerfil($idPerfil,$idMenuPadre){
                            
            $query=$this->db->connect()->prepare("SELECT m.* FROM perfilmenu pm
                                                inner join menu m
                                                on m.idMenu=pm.idMenu 
                                                and m.activo=1 
                                                and pm.activo=1
                                                where pm.idPerfil= :idPerfil 
                                                and m.idMenuPadre= :idMenuPadre");
            try{

                $query->execute(['idPerfil' => $idPerfil,'idMenuPadre' => $idMenuPadre]);
                return $query;

            }catch(PDOException $e){
                return null;
            }            
        }     
      
    }
?>