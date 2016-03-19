<?php
define("SITE_ROOT", dirname(__FILE__));
require SITE_ROOT."/../data/config.php";
$title = $_POST["title"];
$data = $db;

if(isset($title)){
    echo findTitle($title);
}


function findTitle($title){
    global $data;

    if($data){

        $result = pg_query($data, "SELECT title FROM voting WHERE title = '".$title."'");
        $row = pg_fetch_assoc($result);
        if($row["title"]){
            return "error";
        }
    }
    return null;
}