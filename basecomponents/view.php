<?php

class View{

    function __construct(){
        //echo "<p>Vista base</p>";
    }

    function render($nombre){    	    	
        require 'view/' . $nombre . '.php';
        //echo "<p> views/ $nombre.php</p>";   
    }
}

?>