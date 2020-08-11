<?php

include_once 'model/menuModel.php';
include_once 'model/menu.php';

class MenuService{	

	private $listMenu;
	private $menuModel;

	function __construct(){

        $this->listMenu=[];
        $this->menuModel= new MenuModel();

    }

	function loadMenuByIdPerfil($idPerfil,$idMenu){		
		 
		$datos = $this->menuModel->getMenuByIdPerfil($idPerfil,$idMenu);
		
		while ($row = $datos->fetch()){                

			$datos2 = $this->menuModel->getMenuByIdPerfil($idPerfil,$row['idMenu']);

			if ($row2 = $datos2->fetch()) {
				$this->addListMenu($row);
				$this->loadMenuByIdPerfil($idPerfil,$row['idMenu']);
			}else{
				$this->addListMenu($row);
				}

		}
            
		return $this->listMenu;
	}

	function addListMenu($row){

		$item = new Menu();
		$item->idMenu = $row['idMenu'];
		$item->idMenuPadre = $row['idMenuPadre'];
		$item->subNivel = $row['subNivel'];
		$item->selDefault = $row['selDefault'];
		$item->descripcionCorta = $row['descripcionCorta'];
		$item->descripcionLarga = $row['descripcionLarga'];
		$item->url = $row['url'];
        
		array_push($this->listMenu, $item);

	}

}

?>