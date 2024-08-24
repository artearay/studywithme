<?php 
    //Besucherzähler
    $handle = fopen("besucher.txt", "r");
    // "r" -> (mode), read
    $besucherzahl = fgets($handle);
    fclose($handle);

    //while(!feof($handle)) {              //bed.: ende der datei noch nicht erreicht hat
    //   $zeile = fgets($handle);
    //}

    $besucherzahl++;

    $handle = fopen("besucher.txt", "w");
    //fopen -> zum Schreiben öffnen, löscht leer und überschreibt: "w"
    fwrite($handle, $besucherzahl);
    //schreibt etwas in datei (fwrite())
    fclose($handle);
?>

<!DOCTYPE html>
<html lang = "de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vokabelübersetzungen</title>

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>
    <div id="wrapper">
        <header>

        </header>
        <nav>
            <ul>
                <li><a href="index.php">Startseite</a></li>
                <li><a href="manga.php">Manga</a></li>      <!--Dateiname in a href-->
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="geheim.php">Geheim</a></li>
            </ul>
        </nav>

</html>