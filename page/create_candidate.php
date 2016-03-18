<?php
$candidate_error = "";
$firstname = "";
$lastname = "";
$voting = "";
require "../data/config.php";
if($_POST["add_candidate"]){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $voting = $_POST["voting"];
    $votenumber = 100;
    if($firstname && $lastname && $voting){

        if($db){
            $result = pg_query($db, "INSERT INTO candidate(firstname, lastname, votenumber, voting) VALUES('" .$firstname."', '" .$lastname. "', nextval('vote_number'), '" .$voting. "')");
            if($result){
                $candidate_error = "Lisatud!";
            }
            else{
                $candidate_error = "Lisamata! ".pg_last_error($db);
            }
            pg_close($db);

        }

    }
    else{
       $candidate_error = "Kõik väljad peavad olema täidetud!";
    }
}
?>

<form name="create_candidate" method="post" action="">
    <span><?php echo $candidate_error;?></span><br>
    <b>Kandidaadid eesnimi:</b><br>
    <input type="text" name="firstname" value="<?php echo $firstname;?>"><br>
    <b>Kandidaadi perenimi:</b><br>
    <input type="text" name="lastname" value="<?php echo $lastname;?>"><br>
    <b>Hääletus:</b><br>
    <select name="voting">
        <option value="0" <?php if(!$voting)echo"selected='selected'"?> disabled="disabled">Vali</option>
        <?php
        if($db){
            $result = pg_query($db, "SELECT * FROM voting");
            while($row = pg_fetch_assoc($result)){
                $id = $row["id"];
                $title = $row["title"];
                if($voting == $id) {
                    echo "<option value='$id' selected='selected'>$title</option>";
                }
                else{
                    echo "<option value='$id'>$title</option>";
                }
            }
            pg_close($db);
        }

        ?>

    </select><br>
    <input type="submit" name="add_candidate" value="Lisa">

</form>
