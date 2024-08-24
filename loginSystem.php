<?php
    session_start();

    function istEingeloggt() {
        if(isset($_SESSION['eingeloggt']) && $_SESSION['eingeloggt'] == 1) {
            return true;
        }
        return false;
    }

    function register($email, $name, $password) {

        //dass im Feld kein SQL-Code stehen kann (Sicherheitslücke)
        global $db_link;
        $email = mysqli_real_escape_string($db_link, $email);
        $name = mysqli_real_escape_string($db_link, $name);
        //Veraltete Sicherheitsmethode; andere suchen, ist nur ein Beispiel
        $password = md5($password);                     //falls hacker zugriff auf datenbank erhalten -> können passwörter so nicht entschlüsseln

        //Benutzer schon vorhanden?
        $db_res = runSQL("SELECT COUNT(*) FROM login WHERE email='" . $email . "'");
        $row = mysqli_fetch_array($db_res);

        if($row['COUNT(*)'] > 0) {
            return 'Es gibt schon einen Benutzer mit der angegebenen E-Mail-Adresse.';
        }
        //Für die Datenbank einen neuen Eintrag schreiben
        runSQL("INSERT INTO login (email, name, password) VALUES ('" . $email . "', '" . $name . "', '" . $password . "')");
    
        return 'Der Benutzer wurde erfolgreich registriert.';
    }

    function login($email, $password) {
        global $db_link;
        $email = mysqli_real_escape_string($db_link, $email);
        $password = md5($password);  

        $db_res = runSQL("SELECT * FROM login WHERE email='" . $email . "' AND password='" . $password . "'");
        if(mysqli_num_rows($db_res) == 0) {
            return 'Ungültige E-Mail oder ungültiges Passwort.';
        }

        $row = mysqli_fetch_array($db_res);
        $_SESSION['eingeloggt'] = 1;
        $_SESSION['name'] = $row['name'];
        return 'erfolgreich eingeloggt.';
    }

    function logout() {
        $_SESSION['eingeloggt'] = '';
    }

?>