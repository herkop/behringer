<?php

require "../data/config.php";
if(isset($_POST["title"])) {
    $title = $_POST["title"];
    echo findTitle($db, $title);

}


function findTitle($db, $title){

    if($db){

        $result = pg_query($db, "SELECT title FROM voting WHERE title = '".$title."'");
        $row = pg_fetch_assoc($result);
        if($row["title"]){
            return "error";
        }
    }
    return null;
}
