<?php

include "../data/config.php";
$title = $_POST["title"];


if(isset($title)){
    return findTitle($title);
}


function findTitle($title){
    global $db;

    if($db){
        $result = pg_query($db, "SELECT title FROM voting WHERE title = '".$title."'");
        $row = pg_fetch_assoc($result);
        if($row["title"]){
            return "error";
        }
    }
    return null;
}