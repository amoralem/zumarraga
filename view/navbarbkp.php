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
		    
	<!--<ul class="navbar-nav navbar-right text-right mr-auto ml-auto">-->
	<ul class="nav navbar-nav navbar-right">
	<?php
		include_once 'model/user.php';
		$user= new User();

		$user=$this->usuario;

		if($user->idPerfil==1){
			
			echo "<a href='login' class='navbar-brand mr-3'>";
			echo "<img src='view/images/user.svg' width='40' height='40' alt='user'>";
			echo "<span class='style-user'> Ingresar</span>";
			echo "</a>";
		
		}else{

			//echo "<a href='login' class='navbar-brand mr-3'>";
			echo "<div class='navbar-brand mr-3'>";
			echo "<li class='nav-item dropdown'>";
			echo "<img src='view/images/user.svg' width='40' height='40' alt='user'>";			
			echo "<span class='style-user'> $user->nombre $user->ap_Paterno $user->ap_Materno</span>";
			echo "<div class='dropdown-menu' aria-labelledby='subMenuAbout'>";			
			echo "<a href='logout' class='dropdown-item'>Cerrar</a>";			
			echo "</div>";
			echo "</li>";
			echo "<div>";
		
		}

	?>
</ul>
</div>
</div>
	