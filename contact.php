<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title >Contactez-nous</title>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="website-menu-07/fonts/icomoon/style.css">

    <link rel="stylesheet" href="website-menu-07/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="website-menu-07/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="website-menu-07/css/style.css">
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		<style>
      html, body {
      min-height: 100%;
      padding: 0;
      margin: 0;
	  background-image: url('images/contact.jpg');
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      }
      h1 {
      margin: 0 0 20px;
      font-weight: 400;
      color: #1c87c9;
      }
      p {
      margin: 0 0 5px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #1c87c9;
      }
      form {
      padding: 25px;
      margin: 25px;
      box-shadow: 0 2px 5px #f5f5f5; 
      background: black; 
      }
      .fas {
      margin: 25px 10px 0;
      font-size: 72px;
      color: #fff;
      }
      .fa-envelope {
      transform: rotate(-20deg);
      }
      .fa-at , .fa-mail-bulk{
      transform: rotate(10deg);
      }
      input, textarea {
      width: calc(100% - 18px);
      padding: 8px;
      margin-bottom: 20px;
      border: 1px solid #1c87c9;
      outline: none;
      }
      input::placeholder {
      color: #666;
      }
      button {
      width: 100%;
      padding: 10px;
      border: none;
      background: #1c87c9; 
      font-size: 16px;
      font-weight: 400;
      color: #fff;
      }
      button:hover {
      background: #2371a0;
      }    
      @media (min-width: 568px) {
      .main-block {
      flex-direction: row;
      }
      .left-part, form {
      width: 50%;
      }
      .fa-envelope {
      margin-top: 0;
      margin-left: 20%;
      }
      .fa-at {
      margin-top: -10%;
      margin-left: 65%;
      }
      .fa-mail-bulk {
      margin-top: 2%;
      margin-left: 28%;
      }
      }
    </style>
	</head>
	<body>
	<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
			  <div class="site-mobile-menu-close mt-3">
				<span class="icon-close2 js-menu-toggle"></span>
			  </div>
			</div>
			<div class="site-mobile-menu-body"></div>
		  </div> <!-- .site-mobile-menu -->
		  
		  
		  <div class="site-navbar-wrap">
			<div class="site-navbar-top">
			  <div class="container py-3">
				<div class="row align-items-center">
				  <div class="col-6">
					<div class="d-flex mr-auto">
					  <a href="#" class="d-flex align-items-center mr-4">
						<span class="icon-envelope mr-2"></span>
						<span class="d-none d-md-inline-block">clinique221@hospital.com</span>
					  </a>
					  <a href="#" class="d-flex align-items-center mr-auto">
						<span class="icon-phone mr-2"></span>
						<span class="d-none d-md-inline-block">+221 33 243 45 66</span>
					  </a>
					</div>
				  </div>
				  <div class="col-6 text-right">
					<div class="mr-auto">
					  <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
					  <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
					  <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
					  <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
					</div>
					
				  </div>
				</div>
			  </div>
			</div>
	  
			<div class="site-navbar site-navbar-target js-sticky-header">
			  <div class="container">
				<div class="row align-items-center">
				  <div class="col-2">
					<h1 class="my-0 site-logo"><a href="index.html">CLINIQUE 221</a></h1>
				  </div>
				  <div class="col-10">
					<nav class="site-navigation text-right" role="navigation">
					  <div class="container">
						<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
	  
						<ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
						  <li class="active"><a href="#home-section" class="nav-link">Home</a></li>
						  <li><a href="#classes-section" class="nav-link">Classes</a></li>
						  <li class="has-children">
							<a href="#" class="nav-link">Pages</a>
							<ul class="dropdown arrow-top">
							  <li><a href="#" class="nav-link">Team</a></li>
							  <li><a href="#" class="nav-link">Pricing</a></li>
							  <li><a href="#" class="nav-link">FAQ</a></li>
							  <li class="has-children">
								<a href="#">More Links</a>
								<ul class="dropdown">
								  <li><a href="#">Menu One</a></li>
								  <li><a href="#">Menu Two</a></li>
								  <li><a href="#">Menu Three</a></li>
								</ul>
							  </li>
							</ul>
						  </li>
						  <li><a href="#about-section" class="nav-link">About</a></li>
						  <li><a href="#events-section" class="nav-link">Events</a></li>
						  <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
						  <li><a href="contact.php" class="nav-link">Contact</a></li>
						</ul>
					  </div>
					</nav>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
	  
	    
		  <script src="js/jquery-3.3.1.min.js"></script>
		  <script src="js/popper.min.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		  <script src="js/jquery.sticky.js"></script>
		  <script src="js/main.js"></script>
		<!--start-wrap-->

		
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address" style="margin-top: 100px; width: 700px; height: 700px; " >
					  
				     	<h2 style="color:brown;">Adresse de l'hôpital :</h2>
						    	<p style="color:brown;">RUE 14,</p>
						   		<p style="color:brown;">LAMINE GUEYE,</p>
						   		<p style="color:brown;">DAKAR</p>
				   		<p style="color:brown;">Phone:(+221) 33 879 00 00 </p>
				   		<p style="color:brown;">Fax: (+221) 77 837 14 15</p>
				 	 	<p style="color:brown;">Email: <span>hospital@dantec.com</span></p>
				   	
				   </div>
				</div>				
				<div class="col span_2_of_3" style="margin-top: 100px; width: 700px; height: 700px;">
				  <div class="contact-form" >
				  <form action="/">
        <h2 style="color:white;">CONTACTEZ-NOUS</h2>
        <div class="info" >
          <input class="fname" type="text" name="fullname" placeholder="NOM"  required="true" value="">
          <input type="email" name="emailid" placeholder="EMAIL"  required="true" value="">
          <input type="text" name="mobileno" placeholder="NUMERO DE TELEPHONE"  required="true" value="">
          <input type="text" name="description" placeholder="DESCRIPTION"  required="true" value="">
        </div>
        <p style="color:white;">Message</p>
        <div>
          <textarea rows="4"></textarea>
        </div>
        <button style="color:brown;" type="submit" href="hospital/index.html">Submit</button>
      </form>
</div>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	
	</body>
</html>

