<?php

class Menu{

    public $idMenu;
    public $idMenuPadre;
    public $nivel;
    public $selDefault;
    public $descripcionCorta;
    public $descripcionLarga;
    public $url;

	public function __toString(){
     return $this->idMenu . ' '. $this->idMenuPadre. ' '. $this->nivel. ' '. $this->selDefault
     . ' '. $this->descripcionCorta. ' '. $this->descripcionLarga. ' '. $this->url;
   }
    
}

?>
