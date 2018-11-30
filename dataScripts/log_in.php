<?php
	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['password'])))
	{
		$_SESSION['miss'] = '<span style="color:red; ">Login or password is incorrect!</span>';
		header('Location: ../index.php');
		exit();
	}

	require_once "myData.php";

	$connect = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($connect->connect_errno!=0)
	{
		echo "Error: ".$connect->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		//$password = htmlentities($password, ENT_QUOTES, "UTF-8");
	
		if ($result = @$connect->query(
		sprintf("SELECT *,(YEAR(NOW())-YEAR(since)) as ago FROM users WHERE login='%s' ",
		mysqli_real_escape_string($connect,$login))))
		{
			$userCount = $result->num_rows;
			if($userCount>0)
			{
				$row = $result->fetch_assoc();
				if(password_verify($password, $row['password'])){
					$_SESSION['logIn'] = true;
					$_SESSION['id'] = $row['id'];
					$_SESSION['login'] = $row['login'];
					$_SESSION['mail'] = $row['mail'];
					$_SESSION['age'] = $row['age']+$row['ago'];
					$_SESSION['education'] = $row['education'];
					$_SESSION['university'] = $row['university'];
					unset($_SESSION['miss']);
					$result->free_result();
					header('Location: ../index.php');
				}
				else 
				{
					$_SESSION['miss'] = '<span style="color:red">The login or password is incorrect!</span>';
					header('Location: ../index.php');
				}
			} 
			else {
				
				$_SESSION['miss'] = '<span style="color:red;">The login or password is incorrect!</span>';
				header('Location: ../index.php');
				
			}
			
		}
		
		$connect->close();
	}
	
?>