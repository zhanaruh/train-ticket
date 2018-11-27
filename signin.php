<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styless.css">
	<link rel="icon" type="image/gif/png" href="logo.png">
		<title>Transport ticket</title>
		
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">					
			<link rel="stylesheet" href="css/main.css">
			<script type="text/javascript" src="javascript.js"></script>
			<link rel="stylesheet" type="text/css" href="style.css">
			<script type="text/javascript" src="javascript.js"></script>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index."><img src="img/logo.png" alt="" title="" width="80" height="80"/></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="#">RENT A CAR</a></li>
			          <li><a href="#">AIR TICKETS</a></li>
			          <li><a href="train.html">TRAIN TICKETS</a></li>
			          <li><a href="#">HOTELS</a>
						<ul>
			              <li><a href="#">Kazakhstan</a></li>
			              <li><a href="#">Rixos</a></li>
						  <li><a href="#">Alatau</a></li>
						  
			            </ul></li>
			          <li><a href="#">ABOUT US</a></li>
			          <li class="menu-has-children"><a href="signin.php">Log in</a>
			  
			          </li>	
			          <!--<li class="menu-has-children"><a href=""><img src="10.png" width="20" height="20">Shopping bag</a></li>	 -->				          					          		          
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
	</header><!-- #header --><br><br><br>
	
	
	
<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="signin.php?logout='1'" style="color: red;">logout</a></p>
    <?php endif ?>
</div><br><br><br>

	<footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                               <p>Sponsors</p>
							   <img src="visa.png" width="100" height="40">
							   <img src="mastercard.png" width="100" height="55">
							   <img src="spc.png" width="100" height="70"></br>
							   <img src="agent.png" width="110" height="50">
							   <img src="aa.png" width="110" height="70">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                
                                <p>The unique identifier of the user session for reporting to the Customer Care Service: 2711689476</p>
								
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Follow Us</h4>
                           
                                <div class="footer-social d-flex align-items-center">
                                    <a href="https://twitter.com/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.facebook.com" class="fa fa-twitter"></i></a>
                                    <a href="https://vk.com/"><i class="fa fa-dribbble"></i></a>
                                    <a href="https://ok.ru/"><i class="fa fa-behance"></i></a></br></br>
									
                                </div>
								<p>&#169; Ticket.kz 2008-2018</p>
                            </div>
							
                        </div>
                    </div>
						
                </div>
				
            </footer>
            <!-- End footer Area -->	
		
</body>
</html>