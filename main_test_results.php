<?php

	session_start();
	if ((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true)) $header='temps/header_log.php';
	else $header='temps/header_none_log.php';
	
?>
<!DOCTYPE HTML>
<html lang="pl">
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
<body>
	<?php include $header; ?>
	<?php
	if(isset($_SESSION['miss'])){
		echo $_SESSION['miss'];
		unset($_SESSION['miss']);
	}
	?>
	<main>
		<article>
			<h1>Twoja stara by to lepiej napisała!</h1>
			
		</article>
	</main>
	
	
	
	
</body>

</html>