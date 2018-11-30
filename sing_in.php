<?php include 'dataScripts/register.php'; ?>
<?php

	if ((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true)) $header='header_log.php';
	else $header='header_none_log.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	
	<title>Test math</title>
	
	<meta name="description" content="Test " />
	<meta name="keywords" content="math’s test" />
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/logAndReg.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rum+Raisin" rel="stylesheet"> 
	
	<script src="jquery-1.11.3.min.js"></script>
	<script src="myjs.js"></script>

</head>



	<?php include 'temps/header_none_log.php'; ?>
	
	<main>
		<form id="singin" method="post">
							Enter  Name
							<?php
							if (isset($_SESSION['e_login_login'])){
								echo $_SESSION['e_login'];
								unset($_SESSION['e_login']);
							}
							?>
							<br>
							<input name="login" type="text" placeholder="Name"  onblur="this.placeholder=''"> 
							<br>	
							Enter Name 
							<?php
							if (isset($_SESSION['e_pass'])){
								echo $_SESSION['e_pass'];
								unset($_SESSION['e_pass']);
							}
							?>
							<br>
							<input name="pass" type="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder=''" >
							<br>	
							Repeat Pass
							<?php
							if (isset($_SESSION['e_pass'])){
								echo $_SESSION['e_pass'];
								unset($_SESSION['e_pass']);
							}
							?>
							<br>
							<input name="pass2" type="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder=''" >
							<br>
							Enter Mail
							<?php
							if (isset($_SESSION['e_mail'])){
								echo $_SESSION['e_mail'];
								unset($_SESSION['e_mail']);
							}
							?>
							<br>
							<input name="mail" type="text" placeholder="mail"  onblur="this.placeholder=''" >
							<br>
							Enter Age (optional)
							<br>
							<input name=age" type="text" placeholder="Age"  onblur="this.placeholder=''" >
							<br>
							
							<input type="submit" value="Submit">
		</form>
	
	</main>
	
	
	
</body>
</html>