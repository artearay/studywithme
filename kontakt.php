<?php require("./templates/header.php"); ?>

        <div id="content">
            <h1>Kontakt</h1>
            <p>Hier könnt ihr mit mir Kontakt aufnehmen:</p>
            <form action="auswertung.php" method="POST">
                <label>Name: </label><br><input name="userName" type="text"><br><br>
                <label>Nachricht: </label><br><textarea name="message"></textarea><br><br>
                <input name="messageSubmit" value="Nachricht verschicken" type="submit"> <!--value -> dieser text steht im button-->
            </form>
        </div>
        
<?php require("./templates/footer.php"); ?>

        