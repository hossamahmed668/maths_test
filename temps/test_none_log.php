
	<form id="teststart"  method='post' >
								Enter  login
							<?php
							if (isset($_SESSION['e_login_login'])){
								echo $_SESSION['e_login'];
								unset($_SESSION['e_login']);
							}
							?>
							<br>
							<input name="login" type="text" placeholder="login"  onblur="this.placeholder=''"> 
							<br>	
							Enter name 
							<br>
							<input name="pass" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder=''" >
							<br>	
							Repeat pass
							
							<br>
							<input name="pass2" type="password" placeholder="hasło" onfocus="this.placeholder=''" onblur="this.placeholder=''" >
							<br>
							Enter mail
						
							<br>
							<input name="mail" type="text" placeholder="mail"  onblur="this.placeholder=''" >
							<br>
							Enter age (optional)
							<br>
							<input name="age" type="text" placeholder="wiek"  onblur="this.placeholder=''" >
							<br>
							<input type="submit" value="Submit">
			</form>