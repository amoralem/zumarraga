<div class="container d-flex align-items-center">
    <!--BUTTON WHEN IS RESPONSIVE-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>
    <!--END button-->

    <div class="collapse navbar-collapse" id="ftco-nav">
       
        <ul class="navbar-nav text-center mr-auto ml-auto">
            <?php
                include_once 'model/menu.php';
                $bandera = false;
                foreach($this->menu as $row){
                    $menu = new Menu();
                    $menu = $row;

                    if($menu->idMenuPadre==0 and $menu->subNivel==0){

                        if($bandera){                        
                            echo "</ul>";
                            echo "</li>";   
                            $bandera = false;                       
                        }

                        echo "<li class='nav-item $menu->selDefault'>";
                        echo "<a href='$menu->url' class='nav-link pl-0'>$menu->descripcionCorta</a>";
                        echo "</li>";

                    }elseif($menu->idMenuPadre==0 and $menu->subNivel==1){

                        if($bandera){                        
                            echo "</ul>";
                            echo "</li>";   
                            $bandera = false;                        
                        }

                        echo "<li class='nav-item dropdown'>";
                        echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>$menu->descripcionCorta</a>";
                        echo "<ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";

                    }elseif($menu->idMenuPadre != 0 and $menu->subNivel==0){

                        echo "<li><a class='dropdown-item' href='$menu->url'>$menu->descripcionCorta</a></li>";
                            $bandera=true;   

                    }
                    
                }

                if($bandera){                        
                    echo "</ul>";
                    echo "</li>";   
                    $bandera = false;                        
                }

            ?>

        </ul>

        <ul class="navbar-nav navbar-right">
            <?php
                include_once 'model/user.php';
                $user= new User();
                $user=$this->usuario;

                if($user->idPerfil==1){

                    echo "<li class='nav-item'>";
                    echo "<a href='login' class='navbar-brand mr-3'>";
                    echo "<img src='view/images/user.svg' width='40' height='40' alt='user'>";
                    echo "<span class='style-user'> Ingresar</span>";
                    echo "</a>";
                    echo "</li>";
        
                }else{
                               
                    echo "<img src='view/images/user.svg' width='40' height='40' alt='user'>";
                    echo "<li class='nav-item dropdown'>";
                    echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>$user->nombre $user->ap_Paterno $user->ap_Materno</a>";
                    echo "<ul class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                    echo "<li><a class='dropdown-item' href='logout'>Cerrar sesión</a></li>";
                    echo "</ul>";
                    echo "</li>";                     
        
                }

            ?>
            
        </ul>               

    </div>
</div>