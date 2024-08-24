<?php
    $db_link = mysqli_connect('localhost', 'root', '', 'my website');

    if(!$db_link) {
        die ("Verbindung nicht hergestellt.");
    }

function runSQL($sql) {
    global $db_link;            //damit man die Variable verwenden kann
    $db_res = mysqli_query($db_link, $sql) or die("SQL-Abfrage: " . $sql . ", Fehler: " . mysqli_error($db_link));

    return $db_res;
}

?>