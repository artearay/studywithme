<?php require('./templates/header.php'); ?>

    <div id="content">
            <h1>Twisted Wonderland - Episode of Heartslabyul [Kapitel 1]</h1>
            <p>Vokabeln des ersten Kapitels:</p>

<?php require("./templates/connectDB.php");

        $db_res = runSQL("SELECT `ID`, `Vokabel (Kanji)`, `Vokabel (Kana)`, `Deutsche Übersetzung`, `Englische Übersetzung`, `Seite`, `Kontext`, `Notizen` FROM `twst-heartslabyul-1-chap-1`");
        //mysqli_query($db_link, "SELECT `ID`, `Vokabel (Kanji)`, `Vokabel (Kana)`, `Deutsche Übersetzung`, `Englische Übersetzung`, `Seite`, `Kontext`, `Notizen` FROM `kapitel 1`") 
        //Striche neben dem ß!!
        //or die("Fehler: " . mysqli_error($db_link));

        echo('<table>');

        //$row = mysqli_fetch_array($db_res); -> nur für eine Zeile

        while($row = mysqli_fetch_array($db_res)) {
            echo ('<tr>');
            echo ('<td>' . $row['Vokabel (Kanji)'] . '</td>');
            echo ('<td>' . $row['Vokabel (Kana)'] . '</td>');
            echo ('<td>' . $row['Deutsche Übersetzung'] . '</td>');
            echo ('<td>' . $row['Englische Übersetzung'] . '</td>');
            echo ('<td>' . $row['Seite'] . '</td>');
            echo ('<td>' . $row['Kontext'] . '</td>');
            echo ('<td>' . $row['Notizen'] . '</td>');
            echo ('</tr>');
        }

        echo('</table>');
?>
        </div>



    <?php require("./templates/footer.php"); ?>