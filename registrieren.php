<?php
    require('connectDB.php');
    require('loginSystem.php');
    require('header.php'); ?>

    <div id="content">

<?php
    if(isset($_POST['submit'])) {
        if(empty($_POST['email']) || empty($_POST['name']) || empty($_POST['password'])) {
            echo('<p>Bitte alle Felder ausfüllen.</p>');
        } else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {            //wenn es keine gültige mailadresse ist, dann...
            echo('<p>Die angegebene E-Mail-Adresse ist ungültig.</p>');
        } else {
            $erg = register($_POST['email'], $_POST['name'], $_POST['password']);
            echo('<p>' . $erg . '</p>');
        }
        
    } else {                                //Code hat PHP- und HTML-Elemente
?>

    <h1>Registrieren</h1>
    <p>Hier kannst du dich neu registrieren: </p>
    
    <form action="registrieren.php" method="POST">
        <label>E-Mail-Adresse: </label>
        <input type="text" name="email"><br><br>
        <label>Name: </label>
        <input type="text" name="name"><br><br>
        <label>Passwort :</label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Registrieren">
    </form>
    
<?php
    }                                      //Ende von else
?>

    </div>

<?php
    require('./templates/footer.php');

?>
