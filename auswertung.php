<?php require("header.php"); ?>

        <div id="content">
            <h1>Auswertung</h1>

<?php 
        //isset, empty
        if(!empty($_POST["userName"]) && !empty($_POST["message"])) {     //Wenn username und message eingegeben wurden, dann...        //isset -> boolean
            //mail("dreikaesehoch4419@gmail.com", "Eine neue Nachricht von deiner Homepage von " . $_POST["userName"], $_POST["message"]);
            //Mail-Adresse, Betreff der Mail, Inhalt der Mail
            echo "<p>Vielen Dank, " . $_POST["userName"] . "! Deine Nachricht wurde erfolgreich gesendet!</p>";
        } else {
            echo "<p>Bitte alle Felder ausfüllen!</p>";
        }
?>
       
<?php require("footer.php"); ?>
