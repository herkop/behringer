
<table>
    <tr>
        <td><b>Nimi</b></td>
        <td><b>Erakond</b></td>
        <td><b>Number</b></td>
    </tr>
    <?php
    require "../data/config.php";

    if($db) {
        $er = "tere";
        $result = pg_query($db, "SELECT firstname, lastname, voting, votenumber, party FROM candidate");
        while($row = pg_fetch_assoc($result)){
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $votenumber = $row["votenumber"];
            $party = $row["party"];

            echo"<tr>
                <td>$firstname $lastname</td>
                <td>$party</td>
                <td>$votenumber</td>
                </tr>";
        }
        $er = pg_last_error($db);
        pg_close($db);
    }
    else{
        $er = "fail";
    }
    $er = "ffffffffffffffff".pg_last_error($db);
    ?>
<tr><td>mindagi</td><td>fhyht</td><td>rthtrh</td></tr>
</table>