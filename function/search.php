<?php

$key = $_GET['key'];
$array = array();
include "../data/config.php";

$result1 = pg_query($db, "SELECT firstname, lastname FROM candidate WHERE firstname LIKE '%m%'");
while ($row = pg_fetch_assoc($result1)) {
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $array[] = $firstname . " " . $lastname;
    echo $firstname;
}

echo json_encode($array);