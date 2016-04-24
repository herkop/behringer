<?php
include "../data/config.php";
$last_cand = $_GET['last_cand'];
$out = array();
preg_match("[0-9]+", $last_cand, $out);
echo $out;
$result = pg_query($db, "SELECT * FROM candidate WHERE voting = 1 AND id < '$last_cand' ORDER BY id DESC LIMIT 5");
while ($row = pg_fetch_assoc($result)){
    $id = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $party = $row['party'];
    $votenumber = $row['votenumber'];
    $candID = "CD" . $vote . "-" . $id;

    echo "<tr id='$candID' class='candidateList'>
        <td>$firstname $lastname</td>
        <td>$party</td>
        <td>$votenumber</td>
    </tr>";

}