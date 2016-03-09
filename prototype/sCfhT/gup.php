<?php
$comment = "";
if($_POST["run"]){
    $comment = $_POST["sentence"];
}

?>

<form action="" name="data">
    <label>Tekst siia:</label>
<textarea name="sentence"></textarea>
<input value="Run" type="submit" name="run">
    <div ><?php echo $comment;?></div>
</form>