<?php

	session_start();
	
	if (isset($_POST['login'])){
		$good=true;
		//Checking login:
		$login = $_POST['login'];
		
		if ((strlen($login)<2) || (strlen($login)>30)){
			$good=false;
			$_SESSION['e_login']="Logins must be between 3 and 20 characters long!";
		}
		
		if (ctype_alnum($login)==false){
			$good=false;
			$_SESSION['e_login']="Login can be composed of letters and numbers only";
		}
		
		// Checking mail
		$mail = $_POST['mail'];
		$mailB = filter_var($mail, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($mailB, FILTER_VALIDATE_EMAIL)==false) || ($mailB!=$mail)){
			$good=false;
			$_SESSION['e_mail']="Provide a valid email address!";
		}
		//Chacking password
		$pass = $_POST['pass'];
		$pass2 = $_POST['pass2'];
		
		if ((strlen($pass)<8) || (strlen($pass)>20)){
			$good=false;
			$_SESSION['e_pass']="Password must be 8 to 20 characters long!";
		}
		
		if ($pass!=$pass2){
			$good=false;
			$_SESSION['e_pass']="The entered passwords are not identical!";
		}	

		$pass_hash = password_hash($pass, PASSWORD_DEFAULT);
		//Else data
		$age = $_POST['age'];
		$education = $_POST['education'];
		$uniwersity = $_POST['university'];
				

		
			
		if($good!=false){
			$_SESSION['fr_login'] = $login;
			$_SESSION['fr_mail'] = $mail;
			$_SESSION['fr_pass'] = $pass;
			$_SESSION['fr_pass2'] = $pass2;
			if (isset($_POST['regulations'])) $_SESSION['fr_regulations'] = true;
			//Connection
			require_once "myData.php";
			mysqli_report(MYSQLI_REPORT_STRICT);
			try {
				$connection = new mysqli($host, $db_user, $db_password, $db_name);
				if ($connection->connect_errno!=0){
					throw new Exception(mysqli_connect_errno());
				}
				else{
					//Checking mail
					$result = $connection->query("SELECT * FROM users WHERE mail='$mail'");
					
					if (!$result) throw new Exception($connection->error);
					
					$count_mails = $result->num_rows;
					if($count_mails>0){
						$good=false;
						$_SESSION['e_mail']="There is already a specific account for this email address!";
					}		

					//Checking login
					$result = $connection->query("SELECT * FROM users WHERE login='$login'");
					if (!$result) throw new Exception($connection->error);
					$count_logins = $result->num_rows;
					if($count_logins>0){
						$good=false;
						$_SESSION['e_login']="There is already a user with this login! Choose one another.";
					}
					
					if ($good==true){
						//Add new user
						if ($connection->query("INSERT INTO users VALUES (NULL, '$login', '$pass_hash', '$mail', '$age',NULL)")){     
							$_SESSION['register_good']=true;
							$_SESSION['logIn'] = true;
							$_SESSION['login'] =$login;
							$_SESSION['mail'] = $mail;
							$_SESSION['age'] = $age;
							
							
							
							header('Location: welcome.php');
						}
						else{
							throw new Exception($connection->error);
						}
						
					}
					
					$connection->close();
				}
				
			}
			catch(Exception $e){
				echo '<span style="color:red;">Server Error! We apologize for the inconvenience and please register at another time!</span>';
			}
		}
	}
	
	
?>