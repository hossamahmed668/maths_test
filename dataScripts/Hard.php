<?php
	session_start();
	if ((isset($_SESSION['logIn'])) && ($_SESSION['logIn']==true)) $header='temps/header_log.php';
	else $header='temps/header_none_log.php';
	
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

<body>
	<?php
	if(isset($_SESSION['miss'])){
		echo $_SESSION['miss'];
		unset($_SESSION['miss']);
	}
	echo 'Points: '.$_SESSION['points'];
	?>
	<main>
		<form id="testMain" action='dataScripts/overall_testing_Hard.php'  method='post' >
								<?php echo $_SESSION['counter']+1; ?>/25
								<h2><?php echo $_SESSION['question'][$_SESSION['counter']]; ?> <h2>
								<input name="Ans2" type="submit"  value="a"> <?php echo $_SESSION['ansA'][$_SESSION['counter']]; ?>
								</br>
								<input name="Ans2" type="submit"  value="b"> <?php echo $_SESSION['ansB'][$_SESSION['counter']]; ?>
								</br>
								<input name="Ans2" type="submit"  value="c"> <?php echo $_SESSION['ansC'][$_SESSION['counter']]; ?>
								</br>
								<input name="Ans2" type="submit"  value="d"> <?php echo $_SESSION['ansD'][$_SESSION['counter']]; ?>
								</br>
			</form>
	</main>
</body>

</html>