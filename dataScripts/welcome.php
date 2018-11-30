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
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="logAndReg.css">
	<link rel="stylesheet" href="css/fontello.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rum+Raisin" rel="stylesheet"> 
	
	<script src="jquery-1.11.3.min.js"></script>
	<script src="myjs.js"></script>
</head>

<body>
<?php include $header; ?>
<main>
		<article>
			<section class="startpage">
				<div class="welcome">
				</div>	
			</section>
			<section class="descriptions">
				<h1 class="levels">Levels</h1>
				<div class="leveldescript">
					<div class="lvlicon">Easy</div>
					</div>
				<div class="leveldescript">
					<div class="lvlicon">Median</div>
				</div>
				<div class="leveldescript">
					<div class="lvlicon">Hard</div>
				</div>
				<div class="leveldescript">
					<div class="lvlicon">Very Hard</div>
					</div>
			</section>
		</article>
	</main>


	
</body>

</html>