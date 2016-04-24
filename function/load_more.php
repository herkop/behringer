<?php
include "../data/config.php";
$last_cand = $_GET['last_cand'];
$result = pg_query($db, "SELECT * FROM candidate WHERE id < '$last_cand' ORDER BY id DESC LIMIT 5");
while ($row = pg_fetch_assoc($result)){
    $id = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $party = $row['party'];
    $votenumber = $row['votenumber'];

    echo "<tr id='$id' class='candidateList'>
        <td>$firstname $lastname</td>
        <td>$party</td>
        <td>$votenumber</td>
    </tr>";

}