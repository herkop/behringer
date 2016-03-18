<?
include "../data/config.php";
$voting = "";
if($_POST["select_voting"]) {
    $voting = $_POST["voting"];
}
?>


<?php

        $voting = 1;
        if($voting) {


            ?>
            <table>
                <tr>
                    <td><b>Nimi</b></td>
                    <td><b>Erakond</b></td>
                    <td><b>Number</b></td>
                </tr>
                <?php


                if ($db) {
                    $err="vvvvvvvvvvvvvvv";
                    $result1 = pg_query($db, "SELECT firstname, lastname, voting, votenumber, party FROM candidate");
                    while ($row = pg_fetch_assoc($result1)) {
                        $firstname = $row["firstname"];
                        $lastname = $row["lastname"];
                        $votenumber = $row["votenumber"];
                        $party = $row["party"];

                        echo "<tr>
                <td>$firstname $lastname</td>
                <td>$party</td>
                <td>$votenumber</td>
                </tr>";
                    }
                    echo pg_last_error($db);
                    pg_close($db);
                }
                ?>

            </table>
            <?php
echo $err;
    }
?>