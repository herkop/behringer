<?php
include "../data/config.php";
$last_cand = $_GET['last_cand'];
$out = explode("CD", $last_cand)[1];
$vote = explode("-", $out);
echo $vote[0];
echo $vote[1];
$result = pg_query($db, "SELECT * FROM candidate WHERE voting = $vote[0] AND id < '$vote[1]' ORDER BY id DESC LIMIT 5");
while ($row = pg_fetch_assoc($result)){
    $id = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $party = $row['party'];
    $votenumber = $row['votenumber'];
    $candID = "CD" . $vote[0] . "-" . $id;

    echo "<tr id='$candID' class='candidateList'>
        <td>$firstname $lastname</td>
        <td>$party</td>
        <td>$votenumber</td>
    </tr>";

}