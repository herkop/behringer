<?php
	//include "../data/config.php";
	$logged_user = "";
	if(isset($_SESSION["login_user"])) {
		$logged_user = pg_escape_string($_SESSION["login_user"]);
	}
	if($db){
		$res = pg_query($db, "SELECT username FROM person WHERE username ='".$logged_user."'");
		$rw = pg_fetch_assoc($res);
		$user = $rw["username"];
	}
	if(!isset($user)){
	echo "<span class='error'>Selle lehe nägemiseks pead olema sisse loginud <a href='?to=voting'>Logi sisse</a></span>";
}
	else{
	//include "../data/config.php";
	$voting_error = "";
	if(isset($_POST["vote"])){
		if($db){
		    /**+1 to candidate*/
		    $result = pg_query($db, "");
		    /**add user to voted*/
		    $result1 = pg_query($db, "");
		    if($result){$voting_error ="Hääl on antud!";}
		}
	}
?>

<div id="logininfo">List of candidates:</div>
<table>
	<tr><th>Nr</th><th>Nimi</th></tr>
	<?php
	$voting = 6; //MUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUTA
	if ($db&&$voting!="") {
		$result1 = pg_query($db, "SELECT id, firstname, lastname, voting, votenumber, party, region FROM candidate WHERE voting=$voting ORDER BY firstname, lastname DESC");
		while ($row = pg_fetch_assoc($result1)) {
			$id = $row["id"];
			$firstname = $row["firstname"];
			$lastname = $row["lastname"];
			$votenumber = $row["votenumber"];
			$party = $row["party"];
			$region = $row["region"];
			$candID = "CD". $voting . "-" . $id;
			echo "<tr id='$candID' class='candList'>
                		<td>$votenumber</td>
                		<td>$firstname $lastname</td>
                	  </tr>";
		}
		//echo pg_last_error($db);
	}
	?>
</table>
<div id="loginfields">
    <form action="" method="post" name="voting">
        <label for="sel_candidate"><strong>Vali kandidaat: </strong></label>
        <span><?php echo $voting_error;?></span><br>
        <input type="text" name="candidate_nr" id="sel_candidate"><br>
        <input type="submit" name="vote" value="Hääleta">
    </form>
</div>
<?php } pg_close($db); ?>