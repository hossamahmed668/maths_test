<?php
	session_start();
	if(isset($_POST['Ans'])) {
		
		//points decisions
		$ans=$_POST['Ans'];
		if($ans==$_SESSION['correct'][$_SESSION['counter']]){
			$_SESSION['points']++;
			$_SESSION['lvlgood'][$_SESSION['lvlnum']]++;
		}
		else{
			$_SESSION['lvlbad'][$_SESSION['lvlnum']]++;
			$_SESSION['points']--;
		}
		
		$_SESSION['counter']++;
		
		//checking if ended
		if($_SESSION['counter']==25){
			header('Location: ../main_test_results.php');
		}
		elseif($_SESSION['counter']%5==0){
			$_SESSION['lvlnum']=newlvl($_SESSION['points'],$_SESSION['lvlnum']);
			$_SESSION['points']=0;
		}
		else{
		}
	}
	if($_SESSION['counter']<25){
	header('Location: ../Easy.php');
}
function ending($points,$good,$bad,$lvl){
	
};


	?>