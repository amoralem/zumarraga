<?php
require_once 'controller/erroresController.php';

class App{

    function __construct(){
        //echo "<p>Nueva app</p>";

        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if(isset($_SESSION['user'])){
            echo "<p>Existe sesion</p>";
        }else{
            echo "<p>No Existe sesion</p>";
        }

        // cuando se ingresa sin definir controlador        
        if(empty($url[0])){            
            $archivoController = 'controller/mainController.php';
            require_once $archivoController;
            $controller = new MainController();
            $controller->loadModel('main');          
            $controller->render();            
            return false;
        }
        $archivoController = 'controller/' . $url[0] . 'Controller.php';

        if(file_exists($archivoController)){            
            require_once $archivoController;

            // inicializar controlador
            $nameController=$url[0].'Controller';
            $controller = new $nameController;
            $controller->loadModel($url[0]);         

            // # elementos del arreglo
            $nparam = sizeof($url);

            if($nparam > 1){
                if($nparam > 2){
                    $param = [];
                    for($i = 2; $i<$nparam; $i++){
                        array_push($param, $url[$i]);
                    }
                    $controller->{$url[1]}($param);
                }else{
                    $controller->{$url[1]}();
                    $controller->render();
                }
            }else{
                $controller->render();
            }
        }else{
            $controller = new ErroresController();
            //echo "<p>Nueva app ErroresController</p>";
            $controller->render();  
        }

    }
}

?>