<?php
    //session_start();                            //soll sich merken, dass man eingeloggt ist
                                                //Cookies müssen vor allem anderen initialisiert werden
    
    //$_SESSION['eingeloggt'] = 1;
     
    require('./templates/connectDB.php');
    require('./templates/loginSystem.php');
    require('./templates/header.php');
?>

    <div id="content">


<?php
    //Prüfen, ob Formular abgeschickt wurde
    if(isset($_POST['login'])) {
        //Auswertung
        if(empty($_POST['email']) || empty($_POST['password'])) {
            echo('<p>Bitte alle Feldere ausfüllen.</p>');
        } else {
            $erg = login($_POST['email'], $_POST['password']);
            echo('<p>' . $erg . '</p>');
        }
    } else if(isset($_POST['logout'])) {
        logout();
        echo('<p>Erfolgreich ausgeloggt.</p>');
    }
    //Ausloggen-button erscheint im Reiter Login, wenn man angemeldet ist
    else if(istEingeloggt()) {
        ?>
        <p>
        <form action="login.php" method="POST">
            <input type="submit" name="logout" value="ausloggen">
        </form>
        </p>
<?php

    }
    else {
?>

    <h1>Login</h1>
    <p>Willkommen zum Login. <a href="registrieren.php"><br>neu registrieren...</a></p>
    
    <form action="login.php" method="POST">
        <label>E-Mail-Adresse: </label>
        <input type="text" name="email"><br><br>
        <label>Passwort :</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Login">
    </form>

<?php
    }
?>

    </div>

<?php
    require('./templates/footer.php');
?>