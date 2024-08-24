<?php

    //session_start();
    require('loginSystem.php');
    require('header.php');
?>

    <div id="content">
    <h1>Geheim</h1>

<?php
    if(istEingeloggt()) {
        echo('<p>Hallo ' . $_SESSION['name'] . '!</p>');
    } else {
    echo('<p>Diese Seite ist nur für eingeloggte Nutzer sichtbar!</p>');
    }
?>

<?php
    //if(isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == 1) {
   //     echo ('<p>Du bist eingeloggt</p>');
    //}
?>
    </div>

<?php
    require('footer.php');
?>


//MeinPcBlog -> Tutorial: Webseiten erstellen #8: Login
//29:22
