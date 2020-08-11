<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>Jardin de niños Juan de Zumarraga</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    
	    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

	    <link rel="stylesheet" href="view/css/open-iconic-bootstrap.min.css">
	    <link rel="stylesheet" href="view/css/animate.css">
	    
	    <link rel="stylesheet" href="view/css/owl.carousel.min.css">
	    <link rel="stylesheet" href="view/css/owl.theme.default.min.css">
	    <link rel="stylesheet" href="view/css/magnific-popup.css">

	    <link rel="stylesheet" href="view/css/aos.css">

	    <link rel="stylesheet" href="view/css/ionicons.min.css">
	    
	    <link rel="stylesheet" href="view/css/flaticon.css">
	    <link rel="stylesheet" href="view/css/icomoon.css">
	    <link rel="stylesheet" href="view/css/style.css">
 	</head>
	<body>
		<!-- START header-->
	    <header>
	      <?php 
	        include_once('view/header.php');
	      ?>  
	    </header>
	    <!-- END header -->
		<!--START nav-->
	    <nav class="navbar navbar-dark bg-dark navbar-expand-md sticky-top" id="ftco-navbar">
	      <?php 
	        require_once('view/navbar.php');
	      ?>      
	    </nav>
	    <!-- END nav -->
	    <section class="ftco-section-default">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          			<div class="col-md-8 text-center heading-section ftco-animate">
            			<form action="" method="POST">
            				<?php
					            if(isset($this->errorLogin)){
					                echo $this->errorLogin;
					            }
					        ?>			        
					        <h2 class="mb-4"><span>Iniciar</span> sesión</h2>					        
					        <p>Nombre de usuario: <br>
					        <input type="text" name="username" placeholder="Ingresa usuario" required="true"></p>
					        <p>Password: <br>
					        <input type="password" name="password" placeholder="Ingresa password" required="true"></p>
					        <p class="center"><input type="submit" value="Iniciar Sesión"></p>
					    </form>
          			</div>
        		</div>	
        	</div>				
		</section>	      
	    <footer>
	      <?php 
	        include_once('view/footer.php');
	      ?>        
	    </footer>

	    <script src="view/js/jquery.min.js"></script>
	    <script src="view/js/jquery-migrate-3.0.1.min.js"></script>
	    <script src="view/js/popper.min.js"></script>
	    <script src="view/js/bootstrap.min.js"></script>
	    <script src="view/js/jquery.easing.1.3.js"></script>
	    <script src="view/js/jquery.waypoints.min.js"></script>
	    <script src="view/js/jquery.stellar.min.js"></script>
	    <script src="view/js/owl.carousel.min.js"></script>
	    <script src="view/js/jquery.magnific-popup.min.js"></script>
	    <script src="view/js/aos.js"></script>
	    <script src="view/js/jquery.animateNumber.min.js"></script>
	    <script src="view/js/scrollax.min.js"></script>
	    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	    <script src="view/js/google-map.js"></script>
	    <script src="view/js/main.js"></script>  
	</body>
</html>