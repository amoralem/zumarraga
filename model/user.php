<?php

class User{

    public $idUsuario;
    public $usuario;    
    public $nombre;
    public $ap_Paterno;
    public $ap_Materno;
    public $activo;
    public $resetContrasenia;
    public $idPerfil ;
   

	public function __toString(){
     return $this->idUsuario . ' '. $this->usuario . ' '. $this->nombre
     . ' '. $this->ap_Paterno . ' '. $this->ap_Materno . ' '. $this->activo
     . ' '. $this->resetContrasenia . ' '. $this->idPerfil;
   }
    
}

?>