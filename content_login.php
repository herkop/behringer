<?php
include "data/config.php";
	$login_error = "";
	if($_POST["check_login"]){
		$username = pg_escape_string($_POST["username"]);
		$password = pg_escape_string($_POST["password"]);

		if($username && $password){
			if($db){
				$result = pg_query($db, "SELECT password FROM person WHERE username=$username");
				if(hash("sha256", $password) == mysqli_fetch_assoc($result)){
					$login_error = "õige!";
				}
				else{
					$login_error = hash("sha256", $password);
				}
			}
		}
		else{
			$login_error = "Kasutajanimi ja/või parool on vale(d)!";
		}
	}
?>
<div id="logininfo"><p>
			Sisse loginutele:
			<a href="?page=create_voting">Lisa valimine</a>
			<a href="?page=create_candidate">Lisa kandidaat</a>
		</p></div>
	<div id="loginfields">
		<div id="togglebuttons">
			<button class="togglebtn">ID-Kaart</button><!--
	 	 --><button class="togglebtn">Digi-ID</button><!--
	 	 --><button class="togglebtn">Mobiil-ID</button>
		</div>
		<form action="" method="post" name="login">
			<br>
			<span class="error"><?php echo $login_error;?></span><br>
			<b>Kasutajanimi: </b><br>
			<input type="text" name="username"><br>
			<b>Salasõna: </b><br>
			<input type="password" name="password"><br><br>
			<input type="submit" value="Sisene" name="check_login">
		</form>
	</div>

