
<table>
    <tr>
        <td><b>Nimi</b></td>
        <td><b>Erakond</b></td>
        <td><b>Number</b></td>
    </tr>
    <?php
    include "../data/config.php";

    if($db) {
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

        pg_close($db);
    }
    ?>
</table>