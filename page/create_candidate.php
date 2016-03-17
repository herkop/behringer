<?php

?>

<form name="create_candidate">
    <b>Kandidaadid eesnimi:</b><br>
    <input type="text" name="firstname"><br>
    <b>Kandidaadi perenimi:</b><br>
    <input type="text" name="lastname"><br>
    <b>Hääletus:</b><br>
    <select name="voting">
        <option value="0" selected="selected" disabled="disabled">Vali</option>
        <?php
        if($db){
            $result = pg_query($db, "SELECT * FROM voting");
            while($row = pg_fetch_assoc($result)){
                $id = $row["id"];
                $title = $row["title"];
                echo"<option value='$id'>$title</option>";
            }
            pg_close($db);
        }

        ?>

    </select><br>
    <input type="submit" name="add_candidate" value="Lisa">

</form>
