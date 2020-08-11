<?php

class Menu{

    public $idMenu;
    public $idMenuPadre;
    public $subNivel;
    public $selDefault;
    public $descripcionCorta;
    public $descripcionLarga;
    public $url;

	public function __toString(){
     return $this->idMenu . ' '. $this->idMenuPadre. ' '. $this->subNivel. ' '. $this->selDefault
     . ' '. $this->descripcionCorta. ' '. $this->descripcionLarga. ' '. $this->url;
   }
    
}

?>
