<?php

$voting_error = "";
if($_POST["new_voting"]){
    $person = 1;
    $title = $_POST["title"];
    $start_date = $_POST["start_date"];
    $start_time = $_POST["start_time"];
    $finish_date = $_POST["finish_date"];
    $finish_time = $_POST["finish_time"];
    if($title && $start_date && $start_time && $finish_date && $finish_time){
        $start = date("d.m.Y H:i", strtotime($start_date." ".$start_time));
        $finish = date("d.m.Y H:i", strtotime($finish_date." ".$finish_time));
            if($db){
                $result = pg_connect($db, "INSERT INTO voting (title, person, start_date, finish_date) VALUES ($title, $person, $start, $finish)");
                if($result){
                    $voting_error = "Lisaud!";
                }
                else{
                    $voting_error = "Lisamata!".pg_last_error($db);
                }
            }
    }
    else{
        $voting_error = "Kõik väljad peavad olema täidetud!";
    }
}
?>

<form action="" method="post" name="create_voting">
    <span><?php echo $voting_error; ?></span><br>
    <b>Pealkiri: </b><br>
    <input type="text" name="title"><br>
    <b>Algus aeg:</b><br>
    <input type="date" name="start_date"><input type="time" name="start_time"><br>
    <b>Lõpu aeg:</b><br>
    <input type="date" name="finish_date"><input type="time" name="finish_time"><br>
    <input type="submit" name="new_voting">
</form>
