<?php
session_start();
//error_reporting(0);
include("include/config.php");
// Code for updating Password
if(isset($_POST['change']))
{
$cno=$_SESSION['cnumber'];
$email=$_SESSION['email'];
$newpassword=md5($_POST['password']);
$query=mysqli_query($con,"update doctors set password='$newpassword' where contactno='$cno' and docEmail='$email'");
if ($query) {
echo "<script>alert('Mot de passe mis à jour avec succès.');</script>";
echo "<script>window.location.href ='index.php'</script>";
}

}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="Login_v4/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="PLogin_v4/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v4/css/main.css">


				<script type="text/javascript">
function valid()
{
 if(document.passwordreset.password.value!= document.passwordreset.password_again.value)
{
alert("Le mot de passe et le champ de confirmation du mot de passe ne correspondent pas  !!");
document.passwordreset.password_again.focus();
return false;
}
return true;
}
</script>
</head>
	<body class="login">
	<div class="row limiter">
				<div class="container-login100 logo" style="background-image: url('Login_v4/images/bg-01.JPG');">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<div class="main-login">
				<span class="login100-form-title p-b-49">
						Reinitialiser
					</span>

				<div class="box-login">
					<form class="form-login" name="passwordreset" method="post" onSubmit="return valid();">
						<fieldset>
							<p>
							Veuillez définir votre nouveau mot de passe.<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>

							<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Mot de passe</span>
						<input class="input100" type="password" id="password" name="password" placeholder="Mot de passe" required>
						<i class="fa fa-lock"></i> </span>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Confirmer le mot de passe</span>
						<input class="input100" type="password" id="password_again" name="password_again" placeholder="Confirmer mot de passe" required>
						<i class="fa fa-lock"></i> </span>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
							

							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="change">
									Changer <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<div class="new-account">
							Vous avez déjà un compte?
								<a href="user-login.php">
									Connexion
								</a>
							</div>
						</fieldset>
					</form>



					<div id="dropDownSelect1"></div>

						
<!--===============================================================================================-->
	<script src="Login_v4/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v4/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v4/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v4/js/main.js"></script>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> CLINIQUE 221</span>. <span>Tous les droits sont réservés</span>
					</div>
			
				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>