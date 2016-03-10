<?php
include("/prototype/data/config.php");
if($db){
    echo "Ühendus olemas!";
}
else{
    echo "Ühendus puudub!";
}
$comment = "";
$error = "";
$row = "";
if($_POST["run"]){
    $comment = $_POST["sentence"];
    $result = pg_query($db, $comment);
    if($result){
        $row = pg_fetch_all($result);
    }
    else{
        $error = pg_result_error($db);
    }
}

?>

<form action="" method="post" name="data">
    <label>Tekst siia:</label>
<textarea name="sentence"></textarea>
<input value="Run" type="submit" name="run">
    <div ><br>Query: <?php echo $comment;?><br>
    Info: <?php echo $error; ?><br>
    Answer: <?php echo $row; ?></div>

</form>