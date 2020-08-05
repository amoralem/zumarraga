<div class="container d-flex align-items-center">
<!--<a class="navbar-brand" href="index.html">JDZ</a>-->
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

				if($menu->idMenuPadre==0 and $menu->nivel==0){
					if($bandera){
						echo "</div>";
						echo "</li>";	
						$bandera = false;
					}
					echo "<li class='nav-item $menu->selDefault'>";
					echo "<a href='$menu->url' class='nav-link pl-0'>$menu->descripcionCorta</a></li>";
				}elseif($menu->idMenuPadre==0 and $menu->nivel==1){
					if($bandera){
						echo "</div>";
						echo "</li>";	
						$bandera = false;
					}
					echo "<li class='nav-item dropdown'>";
					echo "<a class='nav-link dropdown-toggle' href='#' id='subMenuAbout' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>$menu->descripcionCorta</a>";
					echo "<div class='dropdown-menu' aria-labelledby='subMenuAbout'>";
					
				}elseif($menu->idMenuPadre != 0 and $menu->nivel==0){
					echo "<a class='dropdown-item' href='$menu->url'>$menu->descripcionCorta</a>";		
					$this->bandera=TRUE;			
				}
		
			}
		?>
		</ul>	
	</div>
		    
	
	<a href="login" class="navbar-brand mr-3">	
		<img src="view/images/user.svg" width="40" height="40" alt="user">
			<span class="style-user">Ingresar</span>
	</a>
	
	<!--
	<div class="collapse navbar-collapse" id="ftco-nav">

	        	<ul class="navbar-nav text-center mr-auto ml-auto">
	    <img src="view/images/user.svg" width="40" height="40" alt="user">    

	<li class="nav-item dropdown">
	        			<a class="nav-link dropdown-toggle" id="subMenuAlumno" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alumo</a>
		            	<div class="dropdown-menu dropdown-primary" aria-labelledby="subMenuAlumno">
		                	<a class="dropdown-item" href="#">Reglamento</a>
		              	</div>
	  </li>	
	</ul>
</div>-->
	
</div>
	