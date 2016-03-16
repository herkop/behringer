<?php
$voting_error = "";
if($_POST["new_voting"]){
    $title = $_POST["title"];
    $start_date = $_POST["start_date"];
    $start_time = $_POST["start_time"];
    $finish_date = $_POST["finish_date"];
    $finish_time = $_POST["finish_time"];
    if($title && $start_date && $start_time && $finish_date && $finish_time){

    }
    else{
        $voting_error = "Kõik väljad peavad olema täidetud!";
    }
}
?>

<form action="" method="post", name="create_voting">
    <span><?php echo $voting_error; ?></span>
    <b>Pealkiri: </b><br>
    <input type="text" name="title"><br>
    <b>Algus aeg:</b><br>
    <input type="date" name="start_date"><input type="time" name="start_time"><br>
    <b>Lõpu aeg:</b><br>
    <input type="date" name="finish_date"><input type="time" name="finish_time"><br>
    <input type="submit" name="new_voting">
</form>
