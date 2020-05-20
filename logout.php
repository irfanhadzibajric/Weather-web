<?php
// Zavrsavanje sesije
session_start();
session_destroy();

//unistavanje cookie-a

if(isset($_COOKIE['un']) and isset($_COOKIE['pw'])) {
    $un = $_COOKIE['un'];
    $pw = $_COOKIE['pw'];
    setcookie('un', $un, time()-1);
    setcookie('pw', $pw, time()-1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout stranica</title>
    <link rel="stylesheet" href="styleLOGOUT.css">
</head>
<body>
    <center>
    <div id = "tekst">
        <h2>HVALA NA POSJETI.</h2>
        <h3>Nadamo se da Vam se sviđa naš projekat.</h3><br>
        <h2>Kliknite za početnu stranicu.</h2>
    <form action="index.php" metgod="GET">
        <input id = "poc" type="submit" name="redirect" value="Nazad na početnu stranicu!">
    </form>
    </div>
    </center>
</body>
</html>
